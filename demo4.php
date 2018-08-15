<?php
$con=mysqli_connect('127.0.0.1','root','123456','shop','3306');
if(!$con){
    apiREturn('0',"连接错误:".mysqli_connect_error());
}
mysqli_set_charset($con,'utf8');
mysqli_query($con,"BEGIN");//开启事务
$sql = "INSERT INTO `test` (`id`, `name`, `pid`) VALUES ('12', 'test2', '0')";
$sql2 = "INSERT INTO `test` (`did`, `name`, `pid`) VALUES ('13', 'test2', '0')";//这条我故意写错
$res = mysqli_query($con,$sql);
$res1 = mysqli_query($con,$sql2);
if($res && $res1){
    mysqli_query($con,"COMMIT");//提交事务
    echo '提交成功。';
}else{
    mysqli_query($con,"ROLLBACK");//事务回滚
    echo '数据回滚。';
}
mysqli_query($con,"END");