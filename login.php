<?php
include('db.php');
mysql_select_db('payroll');
if(isset($_POST['btnlogin']))
{
	$name=$_POST['gname'];
	$pass=$_POST['gpass'];
	
	$sql="select reguname,regpass from register where reguname='$name';";
	//echo $sql;
	$query=mysql_query($sql);
	//echo $query;
	while($row=mysql_fetch_array($query))
	{
		$gname=$row['reguname'];
		$gpass=$row['regpass'];

		echo $gname." "."".$gpass;
			if($name==$gname && $pass==$gpass)
			{
				header('Location:admin.php');
			}
			else
			{
				echo "Invalid Credentials";
			}
		
	}
}
?>
<html>
<head><title>Payroll Management System</title></head>
<body>
<Form name="loginform" method="POST">
<div style="width:100%;height:100%">
<!--Header-->
<?php
include_once("header.php");
?>
<!--Menu panel-->
<div style="background-color:#999966;width:100%;height:5%;">

<a href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="aboutus.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>

<!--Content-->
<div style="background-color:#e6f2ff;width:1340px;height:500px;float:left">

<br/><br/><br/><br/><br/><br/>
<table border="1" align="center">
<tr>
<td colspan="2">
<h3 align="center">Login</h3>
</td>
</tr>
<tr>
<td>
Enter Username:</td><td><input type="text" name="gname" value="" required>
</td>
</tr>
<tr>
<td>
Enter Password:</td><td><input type="password" name="gpass" value="" required>
</td>
</tr>
<tr>
<td colspan="2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Submit" name="btnlogin" value="Login" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="btncancel" value="cancel">
</td>
</tr>
</table>
<form>

</div>
<!--Footer-->
<?php
include_once("footer.php");
?>
</div>
</body>
</html>
