<?php
namespace App\Helpers;
class HlsSync
{
	const HEADERS = array(
	    "Accept: */*",
	    "Cache-Control: no-cache",
	    "Connection: keep-alive",
	    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36",
	    "cache-control: no-cache",
	    "Content-Type: application/json"
	);
    public static function exeCurl($url, $type = 'GET', $data = null, $headers = []){
		$curl = curl_init();
		$params = array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 15,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $type,
			CURLOPT_FOLLOWLOCATION => true,
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
		if(is_array($headers) && count($headers) == 0){
			$headers = static::HEADERS;
		}
		$params[CURLOPT_HTTPHEADER] = $headers;
		curl_setopt_array($curl, $params);
		$res = curl_exec($curl); 
		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
		$err = curl_error($curl); 
		curl_close($curl);
		if ($err) { 
			return ['status' => $status, 'err' => $err];
		} else {
			return ['status' => $status, 'res' => $res];
		}
	}
	public static function sync($id)
	{
		$itemBookApointment = \App\Models\BookApointment::find($id);
		if ((int)$itemBookApointment->sync_status == 2 || $itemBookApointment->status != 3) {
			return true;
		}
		$arrDataPush = [];
		$arrDataPush['BranchName'] = "APPOINTMENT";
	    $arrDataPush['BranchCode'] ="6qwjO783bb";
		$arrDataPush['HoTen'] = $itemBookApointment->fullname != '' ? $itemBookApointment->fullname:'Không xác định';
		$arrDataPush['Code'] = "";
		$arrDataPush['GioiTinh'] = in_array((int)$itemBookApointment->gender,[1,2]) ? (int)$itemBookApointment->gender:1;
		$arrDataPush['NgaySinh'] = now()->subYears((int)$itemBookApointment->age)->format('Y-m-d');
		$arrDataPush['SoDienThoai'] = $itemBookApointment->phone;
		$arrDataPush['Email'] = $itemBookApointment->email;
		$ngayHen = "";
		try {
			$ngayHen = \Carbon\Carbon::createFromFormat('d/m/Y',$itemBookApointment->day_book)->format('Y-m-d');
		} catch (\Exception $e) {
			$ngayHen = now()->addDays(1)->format('Y-m-d');
		}
		$arrDataPush['NgayHen'] = $ngayHen;
		$timePickInfo = explode('->',$itemBookApointment->time_pick_text);
		$textTime = is_array($timePickInfo) && isset($timePickInfo[0]) ? trim($timePickInfo[0]):'7:30';
		$arrDataPush['ThoiGianHen'] = $arrDataPush['NgayHen'].' '.$textTime;
		$arrDataPush['VanDeNB'] = $itemBookApointment->note;
		$arrDataPush['TrangThai'] = (int)$itemBookApointment->status - 1;
		$res = static::exeCurl('http://123.25.10.12:1552/api/BVPD/Appointment','POST',json_encode($arrDataPush));
		if ($res['status'] == 200) {
			$resInfo = json_decode($res['res'],true);
			if (is_array($resInfo) && isset($resInfo['GuiId'])) {
				$itemBookApointment->code = $resInfo['GuiId'];
			}
			$itemBookApointment->sync_status = 2;
			$itemBookApointment->save();
		}else {
			$itemBookApointment->sync_status = 1;
			$itemBookApointment->save();
		}
		return true;
	}
}