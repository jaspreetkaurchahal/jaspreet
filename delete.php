<?php
session_start();
include('db.php');
mysql_select_db('payroll');
if(isset($_POST['suid']))
{	
	if(isset($_POST['searchID']))
	{
		$gid=$_POST['suid'];
		//echo $id;
		$sql="select * from users where Eid=$gid";
		//echo $sql;
		$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{
				$id=$row['Eid'];
				$name=$row['Ename'];
				$dob=$row['Edob'];
				$gender=$row['Egender'];
				$address=$row['Eaddress'];	
				$city=$row['Ecity'];
				$province=$row['Eprovince'];	
				$postcode=$row['Epostal'];
				$email=$row['Eemail'];	
				$joindate=$row['Ejoiningdate'];
				$annualbasicpay=$row['Eannualpay'];
		}
	}
			if(isset($_POST['btndelete']))
		{
			$id=$_POST['gid'];
			$sql2="delete from users where Eid=$id";
			//echo $sql2;
			$query=mysql_query($sql2);
			
			if($query)
			{
				echo "Record Deleted Successfully";
			}
			else
			{
				echo "Error";
			}
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
<h3 align="center">Delete Employee Here</h3>
</td>
</tr>
<tr>
<td>
Select ID:</td>
<td>
<?php
include("db.php");
mysql_select_db('payroll');
$sql="select Eid from users";
$query=mysql_query($sql);
//echo $query;
echo "<select name='suid'>";
echo "<option>"."Select Employee ID"."</option>";
while($row=mysql_fetch_array($query))
{
echo "<option>".$row['0']."</option>";
}
echo "</select>";
?>&nbsp;&nbsp;<input type="submit" name="searchID" Value="GetData">
</td>
</tr>
<tr>
<td>
ID:</td><td><input type="text" name="gid" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $id;} }?>">
</td>
</tr>
<tr>
<td>
Name:</td><td><input type="text" name="gname" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $name;} }?>">
</td>
</tr>
<tr>
<td>
Gender:</td><td><input type="text" name="gsex" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $gender;} }?>">
</td>
</tr>
<tr>
<td>
Birth Date:</td><td><input type="text" name="gdob" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $dob;} }?>" placeholder="yyyy/mm/dd">
</td>
</tr>
<tr>
<td>
Address:</td><td><input type="text" name="gaddress" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $address;} }?>">
</td>
</tr>
<tr>
<td>
City:</td><td><input type="text" name="gcity" value="<?php if(isset($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $city;} }?>">
</td>
</tr>
<tr>
<td>
Province:</td><td><input type="text" name="gprovince" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $province;} }?>">
</td>
</tr>
<tr>
<td>
Postal Code:</td><td><input type="text" name="gpostcode" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $postcode;} }?>">
</td>
</tr>
<tr>
<td>
Email:</td><td><input type="text" name="gemail" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $email;} }?>">
</td>
</tr>
<tr>
<td>
Joining Date:</td><td><input type="text" name="gjoindate" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $joindate;} }?>" placeholder="yyyy/mm/dd">
</td>
</tr>
<tr>
<td>
Annual Basic Pay:</td><td><input type="text" name="gbasicpay" value="<?php if(!empty($_POST['suid'])){ if(isset($_POST['searchID'])){ echo $annualbasicpay;} }?>">
</td>
</tr>
<tr>
<td colspan="2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Submit" name="btndelete" value="Delete" >
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