<?php
namespace App\CrmLacViet;

use App\Helpers\Support;

class Connecter
{
    protected $urlConnect = 'https://crm.lacvietintech.com/api/GateWayAPI/Post';
    protected $user = 'sadmin';
    protected $UserId = 'sadmin';
    protected $cmd = 'sp_api_SyncDataKhachHangFacebook';
    protected $type = 'DATATABLE';

    protected function buildDataReqeust($data){
        $ret = [];
        $ret['user'] = $this->user;
        $ret['UserId'] = $this->UserId;
        $ret['cmd'] = $this->cmd;
        $ret['type'] = $this->type;
        $ret['data'] = $data;
        return json_encode($ret);
    }
    public function getHistoryTreatment($patientCode)
    {
        $dataAction = [];
        $dataAction['Action'] = 'danh_sach_lich_hen';
        $dataAction['MaBenhNhan'] = $patientCode;
        $dataReqeust = $this->buildDataReqeust($dataAction);
        return $this->connect($dataReqeust);
    }
	public function getBranch()
    {
        $dataAction = [];
        $dataAction['Action'] = 'danh_sach_chi_nhanh';
        $dataReqeust = $this->buildDataReqeust($dataAction);
        return $this->connect($dataReqeust);
    }
	public function getService()
    {
        $dataAction = [];
        $dataAction['Action'] = 'danh_sach_dich_vu';
        $dataReqeust = $this->buildDataReqeust($dataAction);
        return $this->connect($dataReqeust);
    }
	public function getDoctor()
    {
        $dataAction = [];
        $dataAction['Action'] = 'danh_sach_bac_sy';
        $dataReqeust = $this->buildDataReqeust($dataAction);
        return $this->connect($dataReqeust);
    }
    protected function connect($dataReqeust)
    {
        return Support::extractJson($this->exeCurl($this->urlConnect,'POST',$dataReqeust,['Content-Type: application/json']));
    }
    public function exeCurl($url, $type = 'GET', $data = null, $headers = []){
		$curl = curl_init();
		$params = array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 100,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $type,
			CURLOPT_FOLLOWLOCATION => 0,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0
		);
		if ($type == 'POST' && is_string($data)) {
			$params[CURLOPT_POSTFIELDS] = $data;
		}
		if($type == 'POST' && is_array($data)){
			$params[CURLOPT_POSTFIELDS] = http_build_query($data);
		}
		if ($type == 'GET' && is_array($data)) {
			$params[CURLOPT_URL] = $url.'?'.http_build_query($data);
		}
		if($headers){
			$params[CURLOPT_HTTPHEADER] = $headers;
		}
		curl_setopt_array($curl, $params);
		
		$res = curl_exec($curl); 
		$err = curl_error($curl); 
		curl_close($curl);
		if (!empty($err)) {
			return $err;
		}
		return $res;
	}	
}
