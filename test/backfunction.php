<?php
header('content-type:text/html;charset=utf-8');

$arr=array(1,2,3,4);
function test($var) {
  return $var*2;
}
var_dump(array_map('test', $arr));//返回执行test回掉函数之后的数组

echo "<hr/>";
function test1(&$var) {
  return $var*3;
}

var_dump(array_walk($arr, 'test1'));//返回一个布尔值 true
var_dump($arr);