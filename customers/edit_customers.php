<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>修改customers页面</title>
<style>
    form{
        padding:0px;
        margin:0px;
    }
    table{
        font-size:24px;
        padding:10px;
    }
    div{
        width:800px;
        height:400px;
        margin:50px auto;
        padding:10px;
        border:2px solid black;
    }
</style>
</head>

<body>
<?php 
include ("conn.php");
mysqli_query($conn, "set names UTF-8");
$cid=$_GET["cid"]; //先接收从customers.php传过来的ID值以确定要修改的Customers信息
$query = "select * from customers where cid=?"; 
// $res = @mysqli_query($conn,$query) or die(mysqli_error($conn));
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $cid); //假设cid是一个字符串，根据需要进行调整
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);

$dbrow=mysqli_fetch_array($res);
$cid=$dbrow['cid']; 
$cname=$dbrow['cname']; 
$city=$dbrow['city'];  
$visits_made=$dbrow['visits_made'];
?>

<div>
<table width="70%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" style="font-size:28px;">请填写要修改的Customers信息</td>
    </tr>
</table>
<form action="save_edit_customers.php" method="post"> <!---把内容传到save_edit_customers.php 保存-->
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="10">
    <tr>
        <td width="40%" align="right">cid</td>
        <td width="60%" align="left"><input type="text" name="cid" size="40" style="height:25px" 
            value="<?php echo $cid;?>"/></td>
    </tr>
    <tr>
        <td width="40%" align="right">cname</td>
        <td width="60%" align="left"><input type="text" name="cname" size="40" style="height:25px" 
            value="<?php echo $cname;?>"/></td>
    </tr>
    <tr>
        <td width="40%" align="right">city</td>
        <td width="60%" align="left"><input type="text" name="city" size="40" style="height:25px" 
            value="<?php echo $city;?>"/></td>
    </tr>
    <tr>
        <td width="40%" align="right">visits_made</td>
        <td width="60%" align="left"><input type="text" name="visits_made" size="40" style="height:25px" 
            value="<?php echo $visits_made;?>"/></td>
    </tr>
</table>

<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
        <!----这里很重要,以隐藏方式把ID值也传到save_edit_customers.php文,以确定更新的具体是哪条Customers信息--->
	    <input type="hidden" name="cid" value="<?php echo $cid; ?>" /> 
	    <input type="submit" name="submit1" value="确定修改"/></td>
    </tr>
</table>
</form>
</div>
</body>
</html>
