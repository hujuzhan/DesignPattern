<?php
// author  hujuzhan
// 抽象工厂的工厂

require_once("FactoryProducer/FactoryProducer.php");

// 获取实例化类型
$FactoryProducer = FactoryProducer::getFactory("SHAPE");

// 获取类型形状
$Square = $FactoryProducer->getShape("SQUARE");

// 执行类型具体实现方法
$Square->draw();
?>