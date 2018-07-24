<?php
/**
* 实现红色填充的方法
*/
require_once("interfaceClass/color.php");
class Red implements color{
	public function fill(){
		echo "Red";
	}
}
?>