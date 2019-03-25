<?php
namespace app\car\model;
use	think\Model;
class User extends Model
{
	public function asset(){
		return	$this->belongsToMany('Asset','assetaccess');
	}
	
}

 ?>

 