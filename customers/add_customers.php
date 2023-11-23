<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>添加customers页面</title>
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
<div>
<table width="70%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" style="font-size:28px;">请填写要添加的Customers信息</td>
    </tr>
</table>
<form action="save_customers.php" method="post">
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="10">
    <tr>
        <td width="40%" align="right">cid</td>
        <td width="60%" align="left"><input type="text" name="cid" size="40" style="height:25px"/></td>
    </tr>
    <tr>
        <td width="40%" align="right">cname</td>
        <td width="60%" align="left"><input type="text" name="cname" size="40" style="height:25px"/></td>
    </tr>
    <tr>
        <td width="40%" align="right">city</td>
        <td width="60%" align="left"><input type="text" name="city" size="40" style="height:25px"/></td>
    </tr>
    <tr>
        <td width="40%" align="right">visits_made</td>
        <td width="60%" align="left"><input type="text" name="visits_made" size="40" style="height:25px"/></td>
    </tr>
</table>

<table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center"><input type="submit" name="submit1" value="确定添加" style="height:28px"/></td>
    </tr>
</table>
</form>
</div>
</body>
</html>
