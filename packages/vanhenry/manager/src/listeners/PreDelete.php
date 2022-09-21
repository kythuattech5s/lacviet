<?php namespace vanhenry\manager\listeners;
use App\ExamQuestion;
use vanhenry\manager\model\HGroupUser;
use vanhenry\manager\model\HUser;
class PreDelete{
    public function handle($table,$_id){
		if($table=="h_users"){
            return $this->checkPermissionUpdateUser($_id);
		}
        return array("status"=>true);
    }
    private function checkPermissionUpdateUser($id){
        $groupUserId = (int)\Auth::guard("h_users")->user()->group;
        $adminAll = false;
        if ($groupUserId == 1) {
            $adminAll = true;
        }
        $t = $this->fetchGroupUser($groupUserId);
        $user = HUser::find($id);
        if($user==null){
            return array("status"=>false,"code"=>150);
        }
        if (is_array($id)) {
            foreach ($user as $item) {
                $gr = (int)$item->group;
                if(in_array($gr,$t) || $gr == 0 || $adminAll){
                    continue;
                }
                else{
                    return array("status"=>false,"code"=>150);
                }
            }
            return array("status"=>true);
        }else {
            $gr = (int)$user->group;
            if(in_array($gr,$t) || $gr == 0 || $adminAll){
                return array("status"=>true);
            }
            else{
                return array("status"=>false,"code"=>150);
            }
        }
        
    }
    private function fetchGroupUser($id){
        $arrs = HGroupUser::select("id")->where("parent",$id)->where("act",1)->get();
        $ret  = array();
        array_push($ret, $id);
        foreach ($arrs as $key => $value) {
            $x = $this->fetchGroupUser($value["id"]);
            $ret = array_merge($ret,$x);
        }
        return $ret;
    }
}