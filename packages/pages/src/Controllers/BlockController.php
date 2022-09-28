<?php

namespace Tech5s\PageGrapes\Controllers;

use Illuminate\Http\Request;
use Tech5s\PageGrapes\Models\PageBlock;
use vanhenry\manager\controller\BaseAdminController;

class BlockController extends BaseAdminController
{

    public function getBlock()
    {
        $blocks = PageBlock::where('act',1)->get();
        return response($blocks);
    }
}
