<?php
/**
* 实现圆形的方法
*/
require_once("interfaceClass/shape.php");
class Circle implements shape{
	public function draw(){
		echo "Circle";
	}
}
?>