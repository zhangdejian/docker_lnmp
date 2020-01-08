<?php
echo "Hello PHP<br/>";
$conn = mysqli_connect("数据库容器名字","dbuser","dbpw");
if(!$conn){
   echo "连接数据库失败";
}else{
   echo "连接数据库成功";
}
phpinfo();
?>
