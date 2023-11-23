<?php 
include ("conn.php");
mysqli_query($conn,"set names UTF-8");
//先接收传过来的数据.
if (!empty($_POST['cid'])){
    $cid=$_POST['cid'];
}
if (!empty($_POST['cname'])){
    $cname=$_POST['cname'];
}
if (!empty($_POST['city'])){
    $city=$_POST['city'];
}
if (!empty($_POST['visits_made'])){
    $visits_made=$_POST['visits_made'];
}
if (!empty(date("Y-m-d h:i:s"))){
    $last_visit_time=date("Y-m-d h:i:s");
}
@$query = "Update customers set cid='$cid',cname='$cname',city='$city',visits_made='$visits_made',
    last_visit_time='$last_visit_time' where cid='$cid' "; 
echo $query;
$res = mysqli_query($conn,$query) or die(mysqli_error($conn));

//echo "修改成功";
if($res)
{
?>
<?php
    $who='wyz'; //根据实际情况获取执行操作的用户
    $time=date("Y-m-d h:i:s");
    $table_name='customers';
    $operation='edit';
    $key_value=$cid; //刚添加的记录的关键值
 
    $log_sql = "INSERT INTO logs (who,time,table_name,operation,key_value) 
       VALUES ('$who','$time','$table_name','$operation','$key_value')";
    mysqli_query($conn, $log_sql);

    echo "<script language=javascript>window.alert('Customers信息修改成功,请返回');history.back(1);</script>";
}
else
{
?>
    echo "<script language=javascript>window.alert('Customers信息修改失败,请返回');history.back(1);</script>";
<?php
}
?>
