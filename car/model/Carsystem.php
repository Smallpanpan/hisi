<?php
namespace app\car\model;
use	think\Model;
class Carsystem extends Model
{
	public	function carslist()				
		{								
			return	$this->hasMany('Carslist','car_system_id ','id');				
		} 
}

?>


