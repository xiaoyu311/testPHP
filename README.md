# PHP学习
 ### 数组的学习

 - 定义数组的方式
 ```php
 //索引数组
  $arr=array('苹果','香蕉','橘子');
  $arr[0]='苹果';
  $arr=array('0'=>'苹果')
  print_r($arr);//'0'=>'苹果', '1'=>'', '2'=>'橘子' 

  //关联数组
  $arr=array('apple'=>'苹果');
 ```
 - 获取数组索引对应的键值
 ```php
  print_r($arr[0]);//'苹果'
  print_r($arr['apple']);//'苹果'
 ```
 - for循环
 ```php
  $fruit=array('苹果','香蕉','菠萝');
  for($index=0; $index<3; $index++){
      echo '<br>数组第'.$index.'值是：'.$fruit[$index];//<br>数组第0值是：苹果<br>数组第1值是：香蕉<br>数组第2值是：菠萝
  }
 ```
 - foreach循环
 ```php
  $fruit=array('苹果','香蕉','菠萝');
  foreach($fruit as $key=>$value) {
    echo '<br>第'.$key.'值是：'.$value;//<br>第0值是：苹果<br>第1值是：香蕉<br>第2值是：菠萝
  }
  $arr=array('apple'=>'苹果','orange'=>'橘子');
  foreach($arr as $k=>$v){
    echo '键'.$k.'值'.$v;//键apple值苹果,键banana值香蕉
  }
 ```

