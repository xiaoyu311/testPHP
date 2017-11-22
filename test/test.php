<?php
function info(){
	echo 'hello world </br>';
}
info();

if (!function_exists('md5')) {
	function md5() {
		echo 'this is my md5 func </br>';
	}
}
echo md5('xiaoyu');


/**
 * 按照需求创建置顶表格
 * @param number $rows
 * @param number $cols
 * @return string
*/
function createTable($rows, $cols) {
	$table = "<table border='1' cellpadding='0' cellspacing='0' width='80%'>";
		for($i=1; $i <= $rows; $i++){ 
			$table.="<tr>";
				for($j=1; $j <= $cols; $j++){ 
					$table.="<td>x</td>";
				}
			$table.="</tr>";
		}
	$table.="</table>";
	return $table;
} 

echo createTable(3, 5);

echo "<hr>";


//加上&取到的是变量的引用，也就是地址，所以变量也跟着发生变化了
function test($m) {
	$m+=20;
	var_dump($m);//25
}
$j=5;
test($j);
var_dump($j);//5
echo "<hr>";
function test1(&$m) {
	$m+=20;
	var_dump($m);//25
}
test1($j);
var_dump($j);//25

echo "<hr>";
$fun="md5";
echo $fun(1);//输出是一样的，自己定义的函数也是一样的
echo "<hr>";
echo md5(1);//输出是一样的
echo "<hr>";



get_defined_functions();//这个函数可以输出所有系统函数和我们自己定义的函数


