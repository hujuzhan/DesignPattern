<?php
// 抽象类获取各个实例
abstract class AbstractFactory {
   public abstract function getColor($type);
   public abstract function getShape($type);
}
?>