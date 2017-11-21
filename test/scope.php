<?php

function test() {
  $n = 1;
  ++$n;
  return $n;
}
var_dump(test());//2
var_dump(test());//2
echo "<hr>";


/*
 *静态变量第一次调用时候会初始化，然后存入内存中，第二次调用时在出来
 *动态变量每次执行完就会被释放
*/

function test1() {
  static $n=1;
  ++$n;
  return $n;
}
var_dump(test1());//2
var_dump(test1());//3

echo "<hr>";

//拿全局变量需要有global关键字
$n = 2;
$m = 3;
function test2() {
  global $n, $m;
  $n = 3;
  return $n+$m;
}
var_dump(test2());

echo "<hr>";


//定义的变量会已数组的形式定义到$GLOBAL下，对应的键就是变量名，键值就是变量值
function test3() {
  $GLOBALS['n'];
  var_dump($GLOBALS['n']);
}
test3();