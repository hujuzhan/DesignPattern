<?php
require_once("createClass/Green.php");
require_once("createClass/Red.php");
class ColorFactory extends AbstractFactory{
	public function getShape($type){
		if(empty($type)){
			return "";
		}
		if($type == "GREEN"){
			return new Green();
		} else if($type == "RED"){
			return new Red();
		}
		return null;
	}
	
	public function getColor($type) {
      return null;
	}
}
?>