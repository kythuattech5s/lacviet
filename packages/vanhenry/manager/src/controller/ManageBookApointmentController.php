<?php
namespace vanhenry\manager\controller;

use App\Models\BookApointment;
use App\Models\StatusBookApointment;

class ManageBookApointmentController extends BaseAdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('h_users');
    }
    public function manageBookApointment()
    {
        $request = request();
        $bookApointment = BookApointment::find($request->id);
        if (!isset($bookApointment)) {
            abort(404);
        }
        $listStatusBookApointment = StatusBookApointment::get();
        $table = 'book_apointments';
        return view('vh::manage_book_apointment.view',compact('bookApointment','table','listStatusBookApointment'));
    }
    public function manageBookApointmentAction ($action)
    {
        $request = request();
        switch ($action) {
            case 'change-status':
                return $this->changeBookApointmentActionStatus($request);
                break;
            default:
                return response()->json([
                    'code' => 100,
                    'message' => 'Không tìm thấy thông tin hành động'
                ]);
                break;
        }
    }
    protected function changeBookApointmentActionStatus($request){
        $bookApointment = BookApointment::find($request->id);
        if (!isset($bookApointment)) {
            return response()->json([
                'code' => 100,
                'message' => 'Không tìm thấy thông tin đăng ký khám'
            ]);
        }
        $bookApointment->status = $request->status;
        $bookApointment->save();
        return response()->json([
            'code' => 200,
            'message' => 'Thay đổi trạng thái thành công'
        ]);
    }
}