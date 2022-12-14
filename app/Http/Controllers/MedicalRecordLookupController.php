<?php
namespace App\Http\Controllers;
use App\CrmLacViet\Connecter;
use Support;

class MedicalRecordLookupController extends Controller
{
    public function medicalRecordLookup($request,$route){
        $currentItem = \vanhenry\manager\model\VRoute::find($route->id);
        if ($request->isMethod('post')) {
            if (!isset($request->patient_code) || $request->patient_code == '') {
                return Support::response(['code'=>100,'message'=>'Vui lòng nhập mã bệnh nhân','redirect'=>\VRoute::get("medicalRecordLookup")]);
            }
            $patientCode = $request->patient_code;
            $connecter = new Connecter;
            $dataRes = $connecter->getHistoryTreatment($request->patient_code);
            if (!isset($dataRes['code']) || $dataRes['code'] != 1) {
                return Support::response(['code'=>100,'message'=>$dataRes['msg'] ?? 'Không thể tra cứu vui lòng thử lại sau.','redirect'=>\VRoute::get("medicalRecordLookup")]);
            }
            if (!isset($dataRes['data0'])) {
                return Support::response(['code'=>100,'message'=>'Không có dữ liệu nào được tìm thấy','redirect'=>\VRoute::get("medicalRecordLookup")]);
            }
            $listLichKham = $dataRes['data0'];
            return view('static.medical_record_lookup',compact('currentItem','listLichKham','patientCode'));
        }
        return view('static.medical_record_lookup',compact('currentItem'));
    }
}