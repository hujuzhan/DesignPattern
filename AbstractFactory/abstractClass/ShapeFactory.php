<?php
require_once("createClass/Circle.php");
require_once("createClass/Square.php");
require_once("abstractClass/AbstractFactory.php");
class ShapeFactory extends AbstractFactory{
	public function getShape($type){
		if(empty($type)){
			return "";
		}
		if($type == "CIRCLE"){
			return new Circle();
		} else if($type == "SQUARE"){
			return new Square();
		}
		return null;
	}
	
	public function getColor($type) {
      return null;
	}
}
?>