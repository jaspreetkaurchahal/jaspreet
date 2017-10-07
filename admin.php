<?php
session_start();
include('db.php');
mysql_select_db('payroll');
if(isset($_POST['btnadd']))
{
	$name=$_POST['gname'];
	$gender=$_POST['gsex'];
	$dob=$_POST['gdob'];
	$address=$_POST['gaddress'];	
	$city=$_POST['gcity'];
	$province=$_POST['gprovince'];	
	$postcode=$_POST['gpostcode'];
	$email=$_POST['gemail'];	
	$joindate=$_POST['gjoindate'];
	$annualbasicpay=$_POST['gbasicpay'];

	
	$sql="insert into users (Ename,Edob,Egender,Eaddress,Ecity,Eprovince,Epostal,Eemail,Ejoiningdate,Eannualpay) values('$name','$dob','$gender','$address','$city','$province','$postcode','$email','$joindate',$annualbasicpay)";
	//echo $sql;
	$query=mysql_query($sql);
	//echo $query;
	if($query)
	{
	echo "<br> data inserted successfully";
	}
	else
	{
	echo "error";
	}
}
?>
<html>
<head><title>Welcome Admin</title></head>
<body>
<Form name="loginform" method="POST">
<div style="width:100%;height:100%">
<!--Header-->
<!--<div style="width:100%;height:10%;background-color:#222211">
<h1 style="font-size:200%;color:white" align="center">Payroll Management System</h1>

</div>-->
<?php
include_once('header.php');
?>
<!--Menu panel-->
<?php
include_once('menu.php');
?>

<!--Content-->
<div style="background-color:#e6f2ff;width:1340px;height:500px;float:left">

<br/><br/><br/>
<table border="1" align="center">
<tr>
<td colspan="2">
<h3 align="center">Add Employee Here</h3>
</td>
</tr>
<tr>
<td>
Name:</td><td><input type="text" name="gname" value="" required>
</td>
</tr>
<tr>
<td>
Gender:</td><td>Male:<input type="radio" name="gsex" value="Male">&nbsp;&nbsp; Female:<input type="radio" name="sex" value="Female">
</td>
</tr>
<tr>
<td>
Birth Date:</td><td><input type="text" name="gdob" value="" placeholder="yyyy/mm/dd" required>
</td>
</tr>
<tr>
<td>
Address:</td><td><input type="text" name="gaddress" value="" required>
</td>
</tr>
<tr>
<td>
City:</td><td><input type="text" name="gcity" value="" required>
</td>
</tr>
<tr>
<td>
Province:</td><td><input type="text" name="gprovince" value="" required>
</td>
</tr>
<tr>
<td>
Postal Code:</td><td><input type="text" name="gpostcode" value="" required>
</td>
</tr>
<tr>
<td>
Email:</td><td><input type="text" name="gemail" value="" required>
</td>
</tr>
<tr>
<td>
Joining Date:</td><td><input type="text" name="gjoindate" value="" placeholder="yyyy/mm/dd" required>
</td>
</tr>
<tr>
<td>
Annual Basic Pay:</td><td><input type="text" name="gbasicpay" value="" required>
</td>
</tr>
<tr>
<td colspan="2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Submit" name="btnadd" value="Add" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="btncancel" value="cancel">
</td>
</tr>
</table>
<form>

</div>
<!-- Footer-->

<?php
include_once("footer.php");
?>

</div>
</body>
</html>

