<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Support;

class RegisterInfoController extends Controller
{
    public function register(Request $request)
    {
        $inputs = $request->all();
        unset($inputs['_token']);
        $dataInsert = [
            'map_table' => $inputs['map_table'],
            'map_id' => $inputs['map_id'],
        ];
        unset($inputs['map_table']);
        unset($inputs['map_id']);
        $dataInsert['content'] = json_encode($inputs);
        \DB::table('form_contents')->insert($dataInsert);

        $rules = [
            "Họ_và_tên" => "fullname",
            "Email" => "email",
            "Số_điện_thoại" => "phone",
            "Ghi_chú" => "note",
            "Dịch_vụ" => "service_text",
        ];
        $params = [];
        foreach ($inputs as $k => $input) {
            $key = array_key_exists($k, $rules);
            if ($key) {
                $params[$rules[$k]] = $input;
            }
        }
        Support::sentFormGoogleSheet($params);

        return response([
            'code' => 200,
            'message' => 'Gửi thông tin thành công'
        ]);
    }
}
