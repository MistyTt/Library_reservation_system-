<?php 
include ("conn.php");
mysqli_query($conn,"set names UTF-8");
if (!empty($_GET['cid'])){
    $cid = $_GET['cid'];
}
$sql = "delete from customers where cid='$cid'";
$result = @mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result)
{
?>
<?php
    $who='wyz'; //根据实际情况获取执行操作的用户
    $time=date("Y-m-d h:i:s");
    $table_name='customers';
    $operation='delete';
    $key_value=$cid; //刚添加的记录的关键值
 
    $log_sql = "INSERT INTO logs (who,time,table_name,operation,key_value) 
       VALUES ('$who','$time','$table_name','$operation','$key_value')";
    mysqli_query($conn, $log_sql);

    echo "<script language=javascript>window.alert('Customers信息删除成功,请返回');history.back(1);</script>";
} //result==true
else
{
    echo "<script language=javascript>window.alert('Customers信息删除失败,请返回');history.back(1);</script>";
}
?>
