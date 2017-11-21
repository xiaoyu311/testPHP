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