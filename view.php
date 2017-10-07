<?php
session_start();
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
<table align="center">
<tr>
<td colspan="2">
<h3 align="center">View Employees</h3>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="Submit" name="btnview" value="View" >
</td>
</tr>
</table>
<table align="center" border="1">
	<?php
	include('db.php');
	mysql_select_db('payroll');
	if(isset($_POST['btnview']))
	{	
			echo "<tr>";
			echo "<td>Employee Name</td>";
			echo "<th>DOB</th>";
			echo "<th>Gender</th>";
			echo "<th>Address</th>";
			echo "<th>City</th>";
			echo "<th>Province</th>";
			echo "<th>Postal</th>";
			echo "<th>Email</th>";
			echo "<th>DOJ</th>";
			echo "<th>Annual Income</th>";
			echo "</tr>";
			
			$sql="select * from users";
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
					
					echo "<tr>";
					echo "<td>".$name."</td>";
					echo "<td>".$dob."</td>";
					echo "<td>".$gender."</td>";
					echo "<td>".$address."</td>";
					echo "<td>".$city."</td>";
					echo "<td>".$province."</td>";
					echo "<td>".$postcode."</td>";
					echo "<td>".$email."</td>";
					echo "<td>".$joindate."</td>";
					echo "<td>".$annualbasicpay."</td>";
					echo "</tr>";
			}
	}?>
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