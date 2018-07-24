<?php
//  工程类提供器
require_once("abstractClass/ShapeFactory.php");
require_once("abstractClass/ColorFactory.php");
class FactoryProducer{
	public static function getFactory($type){
		if($type == "SHAPE"){
			return new ShapeFactory();
		} else if($type == "COLOR"){
			return new ColorFactory();
		}
      return null;
	}
}
?>