<?php
namespace app\car\home;
use app\common\controller\Common;

class Index extends Common
{
    public function index()
    {
    	
        return $this->fetch();
    }
}