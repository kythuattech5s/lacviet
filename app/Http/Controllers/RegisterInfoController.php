<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return response([
            'code' => 200,
            'message' => 'Gửi thông tin thành công'
        ]);
    }
}
