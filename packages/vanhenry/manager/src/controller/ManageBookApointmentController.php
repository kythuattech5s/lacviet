<?php
namespace vanhenry\manager\controller;

use App\CrmLacViet\Connecter;
use App\Models\BookApointment;
use App\Models\StatusBookApointment;
use Illuminate\Support\Facades\Validator;

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
        $crmConnecter = new Connecter;
        $dataBranch = $crmConnecter->getBranch();
        $listBranch = $dataBranch['data0'] ?? [];
        $dataService = $crmConnecter->getService();
        $listService = $dataService['data0'] ?? [];
        $dataDoctor = $crmConnecter->getDoctor();
        $listDoctor = $dataDoctor['data0'] ?? [];
        return view('vh::manage_book_apointment.view',compact('bookApointment','table','listStatusBookApointment','listBranch','listDoctor','listService'));
    }
    public function manageBookApointmentAction ($action)
    {
        $request = request();
        switch ($action) {
            case 'change-status':
                return $this->changeBookApointmentStatus($request);
                break;
            case 'sync-crm':
                return $this->syncCrmBookApointment($request);
                break;
            default:
                return response()->json([
                    'code' => 100,
                    'message' => 'Không tìm thấy thông tin hành động'
                ]);
                break;
        }
    }
    protected function changeBookApointmentStatus($request){
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
    protected function validatorSyncCrmBookApointment(array $data)
    {
        return Validator::make($data, [
            'TenBenhNhan' => ['required'],
            'SoDienThoai' => ['required'],
            'MaGioiTinh' => ['required'],
            'TieuDe' => ['required'],
            'MaChiNhanh' => ['required'],
            'NgayDatLich' => ['required'],
        ], [
            'required' => 'Vui lòng chọn/nhập :attribute',
        ], [
            'TenBenhNhan' => 'Tên khách hàng',
            'SoDienThoai' => 'Số điện thoại đặt lịch',
            'MaGioiTinh' => 'Giới tính',
            'TieuDe' => 'Nội dung đặt lịch',
            'MaChiNhanh' => 'Chi nhánh',
            'NgayDatLich' => 'Ngày đặt lịch',
        ]);
    }
    protected function syncCrmBookApointment($request)
    {
        $bookApointment = BookApointment::find($request->id);
        if (!isset($bookApointment)) {
            return response()->json([
                'code' => 100,
                'message' => 'Không tìm thấy thông tin đăng ký khám'
            ]);
        }

        $validator = $this->validatorSyncCrmBookApointment($request->all());
        if ($validator->fails()) {
            return response()->json([
                'code' => 100,
                'message' => $validator->errors()->first()
            ]);
        }

        try {
            $timeDatLich = now()->createFromFormat('d/m/Y H:i:s',$request->NgayDatLich);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 100,
                'message' => 'Không thể đặt lịch. Đinh dạng thời gian không chính xác.'
            ]);
        }

        $bookApointment->TenBenhNhan = $request->TenBenhNhan ?? '';
        $bookApointment->SoDienThoai = $request->SoDienThoai ?? '';
        $bookApointment->MaGioiTinh = $request->MaGioiTinh ?? '';
        $bookApointment->TieuDe = $request->TieuDe ?? '';
        $bookApointment->MaChiNhanh = $request->MaChiNhanh ?? '';
        $bookApointment->NgayDatLich = $timeDatLich;
        $bookApointment->MaBenhNhan = $request->MaBenhNhan ?? '';
        $bookApointment->NgayThang = $request->NgayThang ?? '';
        $bookApointment->NamSinh = $request->NamSinh ?? '';
        $bookApointment->SoLuongKhach = $request->SoLuongKhach ?? '';
        $bookApointment->DichVuKham = isset($request->DichVuKham) && is_array($request->DichVuKham) ? implode($request->DichVuKham,','):'';
        $bookApointment->MaBacSy = $request->MaBacSy ?? '';
        $bookApointment->save();

        $dataBook = [];
        $dataBook['TenBenhNhan'] = $request->TenBenhNhan ?? '';
        $dataBook['SoDienThoai'] = $request->SoDienThoai ?? '';
        $dataBook['MaGioiTinh'] = $request->MaGioiTinh ?? '';
        $dataBook['TieuDe'] = $request->TieuDe ?? '';
        $dataBook['MaChiNhanh'] = $request->MaChiNhanh ?? '';
        $dataBook['NgayDatLich'] = $timeDatLich->format('Y-m-d H:i:s');
        $dataBook['MaBenhNhan'] = $request->MaBenhNhan ?? '';
        $dataBook['NgayThang'] = $request->NgayThang ?? '';
        $dataBook['NamSinh'] = $request->NamSinh ?? '';
        $dataBook['SoLuongKhach'] = $request->SoLuongKhach ?? '';
        $dataBook['DichVuKham'] = isset($request->DichVuKham) && is_array($request->DichVuKham) ? implode($request->DichVuKham,','):'';
        $dataBook['MaBacSy'] = $request->MaBacSy ?? '';
        dd('Có bao nhiêu đôi ngôn tình');
    }
}