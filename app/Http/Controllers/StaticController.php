<?php
namespace App\Http\Controllers;
use App\Models\{News,ServiceCategory,Specialist,Doctor,RegisterAdvise,BookApointment,BookApointmentDoctor,TimePick,Question,QueueEmail,DrugLookup,BodyLookup,DiseaseLookup};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use \View;
use App\Helpers\Utm;
class StaticController extends Controller
{
    public function contact($request, $route, $link)
    {
    	$currentItem = \vanhenry\manager\model\VRoute::find($route->id);
    	return View::make('static.contact',compact('currentItem'));
    }
    public function search($request, $route, $link)
    {
    	// if ($request->isMethod('post')) {
    	// 	$val = $request->input('val');
		// 	if (!isset($val)) return '';
		// 	$listNews = News::publish()->act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
		// 	$listServices = ServiceCategory::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
		// 	$listSpecialist = Specialist::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
		// 	$listDoctor = Doctor::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
        //     $listQuestion = Question::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
        //     $listDiseaseLookup = DiseaseLookup::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
        //     $listBodyLookup = BodyLookup::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
        //     $listDrugLookup = DrugLookup::act()->FullTextSearch('name',$val)->ord()->get()->take(4)->all();
		// 	return view('search.autocomplete_search_result',compact('listNews','listQuestion','listServices','listSpecialist','listDoctor','listDiseaseLookup','listBodyLookup','listDrugLookup','val'));
    	// }
    	// if ($request->isMethod('get')) {
    		$val = $request->input('q');
            $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
            $listItems = News::publish()->act()->FullTextSearch('name',$val)->orderBy('time_published','desc')->paginate(5);
            $listHotNews = News::act()->where('hot',1)->publish()->orderBy('time_published','desc')->limit(5)->get();
    		return view('search.basic_view',compact('val','currentItem','listItems','listHotNews'));
    	// }
    }
    public function searchItem($request, $route, $link){
    	$q = $request->input('q');
    	$type = $request->input('type');
    	if (!isset($type)) {
    		echo 'Không có kết quả nào phù hợp';
    	}
    	switch ($type) {
    		case 'news':
				$listItems = News::publish()->act()->FullTextSearch('name',$q)->paginate(8);
				return view('search.search_news',compact('listItems'));
    			break;
            case 'service':
                $listItems = ServiceCategory::act()->FullTextSearch('name',$q)->paginate(6);
                return view('search.search_services',compact('listItems'));
                break;
            case 'specialist':
                $listItems = Specialist::act()->FullTextSearch('name',$q)->paginate(8);
                return view('search.search_specialist',compact('listItems'));
                break;
            case 'doctor':
                $listItems = Doctor::act()->FullTextSearch('name',$q)->paginate(8);
                return view('search.search_doctor',compact('listItems'));
                break;
            case 'question':
                $listItems = Question::act()->FullTextSearch('name',$q)->paginate(8);
                return view('search.search_question',compact('listItems'));
                break;
            case 'disease_lookups':
                $listItems = DiseaseLookup::act()->FullTextSearch('name',$q)->paginate(8);
                return view('search.search_disease_lookups',compact('listItems'));
                break;
            case 'body_lookups':
                $listItems = BodyLookup::act()->FullTextSearch('name',$q)->paginate(8);
                return view('search.search_body_lookups',compact('listItems'));
                break;
            case 'drug_lookups':
                $listItems = DrugLookup::act()->FullTextSearch('name',$q)->paginate(8);
                return view('search.search_drug_lookups',compact('listItems'));
                break;
    		default:
    			return '';
    			break;
    	}
    }
    public function searchDoctor($request, $route, $link){
        $listSpecialist = Specialist::act()->get();
        $q = $request->input('q');
        $currentItem = $route;
        $listItems = Doctor::act()->FullTextSearch('name',$q)->paginate(12);
        return view('search.view_search_doctor',compact('listItems','q','currentItem','listSpecialist'));
    }
    public function searchQuestion($request, $route, $link){
        $q = $request->input('q');
        $currentItem = $route;
        $listItems = Question::act()->FullTextSearch('name',$q)->paginate(12);
        return view('search.view_search_question',compact('listItems','q','currentItem'));
    }
    protected function validatorSendBookApointment(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required'],
            'phone' => ['required'],
        ],[
            'required' => 'Vui lòng nhập/chọn :attribute',
        ],[
            'fullname' => 'Họ và tên',
            'phone' => 'Số điện thoại',
        ]);
    }
    public function bookApointment ($request, $route, $link)
    {
        $validator = $this->validatorSendBookApointment($request->all());
        if ($validator->fails()) {
            return \Support::response([
                'code' => 100,
                'message' => $validator->errors()->first(),
            ]);
        }
        $itemTimePick = TimePick::find($request->input('time_pick'));
        $timePickText = isset($itemTimePick) ? $itemTimePick->name:'';
        $data = [
            'fullname'  => $request->input('fullname'),
            'service_id'=> (int)$request->input('service'),
            'phone'     => $request->input('phone'),
            'email'     => $request->input('email'),
            'status' => 1,
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
            'note' => $request->input('note'),
        ];
        $utmInfo = Utm::get();
        $dataCreate = array_merge($data,$utmInfo);
        BookApointment::insert($dataCreate);
        $this->sendEmailNoficationContact($dataCreate,'bookApointment');
        return \Support::response([
            'code' => 200,
            'message' => 'Đặt lịch khám thành công',
            'redirect_url' => 'dat-lich-kham-thanh-cong'
        ]);
    }
    protected function validatorSendResgisterAdvise(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required'],
            'phone' => ['required'],
        ],[
            'required' => 'Vui lòng nhập/chọn :attribute',
        ],[
            'fullname' => 'Họ và tên',  
            'phone' => 'Số điện thoại',
        ]);
    }
    public function resgisterAdvise($request, $route, $link){
        $validator = $this->validatorSendResgisterAdvise($request->all());
        if ($validator->fails()) {
            return \Support::response([
                'code' => 100,
                'message' => $validator->errors()->first(),
            ]);
        }
        $type = (int)$request->input('type');
        $title = 'Đăng ký tư vấn';
        switch ($type) {
            case 1:
                $title = 'Đăng ký tư vấn';
                break;
            default:
                $title = 'Đăng ký tư vấn';
                break;
        }
        $data = [
            'title'     => $title,
            'fullname'  => $request->input('fullname'),
            'phone'     => $request->input('phone'),
            'email'     => $request->input('email'),
            'register_address'     => $request->input('register_address'),
            'act' => 0,
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
            'note' => $request->input('note')
        ];
        $utmInfo = Utm::get();
        $dataCreate = array_merge($data,$utmInfo);
        RegisterAdvise::insert($dataCreate);
        $this->sendEmailNoficationContact($dataCreate,'resgisterAdvise');
        return \Support::response([
            'code' => 200,
            'message' => 'Đăng ký thành công',
            'redirect_url' => 'dang-ky-tu-van-thanh-cong'
        ]);
    }
    public function sendEmailNoficationContact($data,$type){
        // switch ($type) {
        //     case 'bookApointment':
        //         $title = $_SERVER['SERVER_NAME'].' Khách hàng gửi thông tin đặt lịch khám.';
        //         $content = view('queue_emails.book_apointment',compact('data'))->render();
        //         $listEmail = \DB::table('email_receive_informations')->whereRaw("FIND_IN_SET(1,group_email)")->get()->all();
        //         break;
        //     case 'resgisterAdvise':
        //         $title = $_SERVER['SERVER_NAME'].' Khách hàng gửi thông tin đăng ký tư vấn.';
        //         $content = view('queue_emails.resgister_advise',compact('data'))->render();
        //         $listEmail = \DB::table('email_receive_informations')->whereRaw("FIND_IN_SET(2,group_email)")->get()->all();
        //         break;
        //     default:
        //         return true;
        //         break;
        // }
        // if (count($listEmail) > 0) {
        //     $mainEmail = $listEmail[0]->email;
        //     $arrEmailCc = [];
        //     if (count($listEmail) > 1) {
        //         foreach ($listEmail as $key => $emailInfo) {
        //             if ($key > 0) {
        //                 array_push($arrEmailCc, $emailInfo->email);
        //             }
        //         }
        //     }
        //     $listEmailCc = count($arrEmailCc) > 0 ? json_encode($arrEmailCc):'';
        //     $dataCreate = [
        //         "title"         => $title,
        //         "content"       => $content,
        //         "to"            => $mainEmail,
        //         "created_at"    => new \DateTime,
        //         "updated_at"    => new \DateTime,
        //         "status"        => 0,
        //         "count_error"   => 0,
        //         "is_sms"        => 0,
        //         "cc"            => $listEmailCc
        //     ];
        //     QueueEmail::insert($dataCreate);
        // }
        return true;
    }
    public function ratingUsefulNews($request, $route, $link){
        $newId = $request->input('new');
        $type = $request->input('type');
        $itemNews = News::find($newId);
        if (!isset($newId) || !isset($type) || !isset($itemNews)) {
            return \Support::response([
                'code' => 100,
                'message' => 'Đã có lỗi xảy ra vui lòng thử lại qua!'
            ]);
        }
        switch ($type) {
            case 'like':
                $itemNews->like = $itemNews->like +1;
                break;
            case 'unlike':
                $itemNews->unlike = $itemNews->unlike +1;
                break;
            default:
                break;
        }
        $itemNews->save();
        return \Support::response([
            'code' => 200,
            'message' => 'Cảm ơn bạn đã đánh giá bài viết.'
        ]);
    }
    public function makeQuestion($request, $route, $link){
        $listQuestionCategory = \App\Models\QuestionCategory::act()->get();
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        return View::make('static.make_question',compact('currentItem','listQuestionCategory'));
    }
    public function orderExaminationSchedule($request, $route, $link){
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        return View::make('static.order_examination_schedule',compact('currentItem'));
    }
    public function introduce($request, $route, $link){
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listEquipment = \App\Models\Equipment::act()->get();
        $historyBegin = \App\Models\HistoryBegin::act()->get();
        $listCertification = \App\Models\Certification::act()->get();
        $listLeadership = \App\Models\Leadership::act()->get();
        return View::make('static.introduce',compact('currentItem','listEquipment','historyBegin','listCertification','listLeadership'));
    }
    public function loadDoctorOfSpecialist($request, $route, $link)
    {
        $specialistId = (int)$request->input('specialist');
        $specialist = Specialist::find($specialistId);
        if (isset($specialist)) {
            $listDoctor = Doctor::where('specialist_id',$specialistId)->act()->get();
        } else {
            $listDoctor = Doctor::act()->get();
        }
        $str = '<option value="0">Chọn bác sĩ</option>';
        foreach ($listDoctor as $item) {
            $str.= vsprintf('<option value="%s">%s</option>',[$item->id,$item->name]);
        }
        return $str;
    }
    public function replaceURL($string){
        $string=strtolower($string);
        $str = str_replace('-', ' ', $string);
        $utf8characters = 'à|a, ả|a, ã|a, á|a, ạ|a, ă|a, ằ|a, ẳ|a, ẵ|a,  ắ|a, ặ|a, â|a, ầ|a, ẩ|a, ẫ|a, ấ|a, ậ|a, đ|d, è|e, ẻ|e, ẽ|e, é|e, ẹ|e,  ê|e, ề|e, ể|e, ễ|e, ế|e, ệ|e, ì|i, ỉ|i, ĩ|i, í|i, ị|i, ò|o, ỏ|o, õ|o,  ó|o, ọ|o, ô|o, ồ|o, ổ|o, ỗ|o, ố|o, ộ|o, ơ|o, ờ|o, ở|o, ỡ|o, ớ|o, ợ|o,  ù|u, ủ|u, ũ|u, ú|u, ụ|u, ư|u, ừ|u, ử|u, ữ|u, ứ|u, ự|u, ỳ|y, ỷ|y, ỹ|y,  ý|y, ỵ|y, À|a, Ả|a, Ã|a, Á|a, Ạ|a, Ă|a, Ằ|a, Ẳ|a, Ẵ|a, Ắ|a, Ặ|a, Â|a,  Ầ|a, Ẩ|a, Ẫ|a, Ấ|a, Ậ|a, Đ|d, È|e, Ẻ|e, Ẽ|e, É|e, Ẹ|e, Ê|e, Ề|e, Ể|e,  Ễ|e, Ế|e, Ệ|e, Ì|i, Ỉ|i, Ĩ|i, Í|i, Ị|i, Ò|o, Ỏ|o, Õ|o, Ó|o, Ọ|o, Ô|o,  Ồ|o, Ổ|o, Ỗ|o, Ố|o, Ộ|o, Ơ|o, Ờ|o, Ở|o, Ỡ|o, Ớ|o, Ợ|o, Ù|u, Ủ|u, Ũ|u,  Ú|u, Ụ|u, Ư|u, Ừ|u, Ử|u, Ữ|u, Ứ|u, Ự|u, Ỳ|y, Ỷ|y, Ỹ|y, Ý|y, Ỵ|y, "|,  &|';
        $replacements = array();
        $items = explode(',', $utf8characters);
        foreach ($items as $item) {
            @list($src, $dst) = explode('|', trim($item));
            $replacements[trim($src)] = trim($dst);
        }
        $str = trim(strtr($str, $replacements));
        $str = preg_replace('/(\s|[^A-Za-z0-9\-])+/', '-', $str);
        $str = trim($str, '-');
        return $str;
    }
    public function clean($string) {
       $string = str_replace(' ', '-', $string);
       $string = preg_replace('/[^A-Za-z0-9\-\.]/', '', $string);
       return preg_replace('/-+/', '-', $string);
    }
    public function cleanFileName($string)
    {
       return $this->replaceURL($this->clean($string));
    }
    protected function validatorSendQuestion(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required'],
            'phone' => ['required'],
            'email' => ['required','email'],
            'parent' => ['exists:questions_categories,id'],
            'title' => ['required'],
        ],[
            'required' => 'Vui lòng nhập/chọn :attribute',
            'email' => 'Vui lòng nhập Email đúng định dạng',
            'exists' => 'Không tìm thấy thông tin :attribute',
        ],[
            'fullname' => 'Họ và tên',  
            'phone' => 'Số điện thoại',
            'email' => 'Email',
            'parent' => 'Chuyên khoa',
            'title' => 'Tiêu đề câu hỏi',
        ]);
    }
    public function sendQuestion($request){
        $validator = $this->validatorSendQuestion($request->all());
        if ($validator->fails()) {
            return \Support::response([
                'code' => 100,
                'message' => $validator->errors()->first(),
            ]);
        }
        $question = new Question;
        $question->name = $request->input('title');
        $question->age = $request->input('age');
        $question->phone = $request->input('phone');
        $question->email = $request->input('email');
        $question->customer_name = $request->input('fullname');
        $question->parent = (int)$request->input('parent');
        $question->act = 0;
        $question->question = $request->input('note');
        $question->created_at = new \DateTime;
        $question->time_ask = new \DateTime;
        $slug = $this->replaceURL('Hỏi đáp '.trim($question->name));
        $question->slug = \FCHelper::generateSlug('v_routes', $slug);
        $question->save();
        $dataRoutes = array(
            'controller'=>'App\Http\Controllers\QuestionController@view',
            'vi_link'=>$question->slug,
            'table'=>'questions',
            'vi_name'=>$question->name,
            'map_id'=>$question->id,
            'updated_at'=>new \DateTime(),
            'created_at'=>new \DateTime(),
            'is_static'=>0,
        );
        \DB::table('v_routes')->insert($dataRoutes);
        return \Support::response([
            'code' => 200,
            'message' => 'Gửi câu hỏi thành công',
            'redirect_url' => 'gui-cau-hoi-thanh-cong'
        ]);
    }
    public function successfulAppointmentBooking($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        return View::make('static.successful_appointment_booking',compact('currentItem'));
    }
    public function signupSuccessfulConsultation($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        return View::make('static.signup_successful_consultation',compact('currentItem'));
    }
    public function guiCauHoiThanhCong($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        return View::make('static.dat_cau_hoi_thanh_cong',compact('currentItem'));
    }
    public function faq($request, $route, $link)
    {
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        $listFaqs = \DB::table('faqs')->where('act',1)->get();
        $listForcustomer = \App\Models\ForCustomer::act()->get();
        return View::make('static.faq',compact('listFaqs','listForcustomer','currentItem'));
    }

    public function autoDeactiveBanner()
    {
        $listBannerExp = \App\Models\Banner::act()->where('time_show','<',new \DateTime())->get();
        foreach ($listBannerExp as $item) {
            $item->act = 0;
            $item->save();
        }
        $listBannerGdnExp = \App\Models\BannerGdn::act()->where('time_show','<',new \DateTime())->get();
        foreach ($listBannerGdnExp as $item) {
            $item->act = 0;
            $item->save();
        }
        echo 'Done';
    }
    public function resgisterAdviseView($request,$route){
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        return View::make('static.register_advise_form',compact('currentItem'));
    }
}