<?php
/**
* 实现方形的方法
*/
require_once("interfaceClass/shape.php");
class Square implements shape{
	public function draw(){
		echo "Square";
	}
}
?>