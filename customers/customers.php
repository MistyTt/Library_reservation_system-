<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>customers主页面</title>
<style>
    div{
        font-size:36px;
        text-align:center;
        padding:15px;
    }
    table{
        font-size:22px;
        text-align:center;
        padding:5px;
    }
</style>
</head>

<body>
<?php 
include ("conn.php");
mysqli_query($conn,"set names UTF-8");
?>
<div>下面为所有Customers的数据</div>
<table width="70%" height="100" border="5" align="center" cellpadding="10" cellspacing="10">
    <tr>
        <td><b>cid</b></td>
        <td><b>cname</b></td>
        <td><b>city</b></td>
        <td><b>visits_made</b></td>
        <td><b>last_visit_time</b></td>
        <td colspan=2 width="100px"><b>Operations</b></td>
    </tr>
<div><a href='http://localhost/exp3_reflection/customers/add_customers.php?cid=$cid'><font color='red'>Add Customers</font></div>

<?php
$query = "select * from customers";  
$res = mysqli_query($conn, $query) or die(mysqli_error());
$row = mysqli_num_rows($res);  
if($row)
{
    for($i=0;$i<$row;$i++)  { 
        $dbrow=mysqli_fetch_array($res);
        @$cid=$dbrow['cid']; 
        @$cname=$dbrow['cname']; 
        @$city=$dbrow['city']; 
        @$visits_made=$dbrow['visits_made']; 
        @$last_visit_time=$dbrow['last_visit_time']; 
?>

<tr>
<?php
echo "<td>$cid</td>"; 
echo "<td>$cname</td>"; 
echo "<td>$city</td>"; 
echo "<td>$visits_made</td>"; 
echo "<td>$last_visit_time</td>"; 
echo "<td><a href='http://localhost/exp3_reflection/customers/edit_customers.php?cid=$cid'><font color='green'>Edit</font></td>";
echo "<td><a href='http://localhost/exp3_reflection/customers/del_customers.php?cid=$cid'><font color='red'>Delete</font></td>";
?>
</tr>
<?php
}
}
?>
</table>
</body>
</html>
