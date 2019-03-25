<?php
namespace app\car\admin;
use app\system\admin\Admin;
use think\Db;

use app\car\model\City;
use app\car\model\Region;

class Index extends Admin
{
    protected $hisiModel = '';//模型名称[通用添加、修改专用]
    protected $hisiTable = '';//表名称[通用添加、修改专用]
    protected $hisiAddScene = '';//添加数据验证场景名
    protected $hisiEditScene = '';//更新数据验证场景名

    public function index()
    {
    	echo "string";
//        return $this->fetch();

    }
     public function base()
    {
    	echo "base";
        

    }

    public function test()
    {
    	// 分组切换类型：0单个分组[有链接]，1分组切换[有链接]，2分组切换[无链接]，3无需分组切换，具体请看模块下面的view/layout.php
        	$this->assign('tab_type', 1);// 默认值 0
            
        	// tab切换数据
            $tab_data = [
            	'menu' =>[
                     ['title' => '管理员角色', 'url' => 'admin/user/role'],
                     ['title' => '系统管理员', 'url' => 'admin/user/index'],
                 ] ,
                 'current' => 'admin/user/role'
             ];
            $this->assign('tab_data', $tab_data);
            
            // 列表页默认数据输出变量
            $data_list = [];
            $this->assign('data_list', $data_list);
            
            // 分页代码
            // $this->assign('pages', $data_list->render());
            
            return $this->fetch();
    }

    // 显示背景和网点选项
    public function readposter(){
        $C = Model("City");
        $R = Model("Region");
        $city = City::all();
        $num1 = $C->count();
        $num2 = $R->count();
        $region = array();
        $store = array();
        for($n=1;$n<=$num1;$n++)
        {
            $re = Region::where('cityid',$n)->column('name');
            $region[$n]=$re;
        }
//        for ($i=1; $i <=$num2 ; $i++) {
//            $ca = Carstore::where('region',$i)->select();
//            array_push( $store, $ca);
//        }
        $data['num1'] = $num1;
        $data['num2'] = $num2;
//        $data['store'] = $store;
        $data['region'] = $region;
        $data['city'] = $city;
        // $region[0 ]
//        $da =Poster::all();
//        $data['poster'] = $da;
        echo json_encode($data);
        return;
    }





}
