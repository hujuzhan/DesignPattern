<?php
/**
* 实现绿色填充的方法
*/
require_once("interfaceClass/color.php");

class Green implements color{
	public function fill(){
		echo "Green";
	}
}
?>