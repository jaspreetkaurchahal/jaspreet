<html>
<head><title>Welcome Admin</title>
<script language="javascript"></script>
<script type="text/javascript" src="js/jspdf.min.js"></script>
  
 <script type="text/javascript" src="js/jquery-git.js"></script>
<script>
	function printData()
{
   var divToPrint=document.getElementById("printTable");
   alert("Print");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$(window).on('load', function() {
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#pdfview').click(function () {
    doc.fromHTML($('#printTable').html(), 15, 15, {
        'width': 700,
            'elementHandlers': specialElementHandlers
    });
    doc.save('file.pdf');
});
});
</script>

</head>
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

<?php
	session_Start();
							include("db.php");
							mysql_select_db('payroll');
							$gid=$_SESSION['id'];			//getting id from Report.php
							
							$sql="select * from users where Eid=$gid";
							//echo $sql;
							$query=mysql_query($sql);
							echo "<div><table id=printTable align=center>";
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
							
									$tax=(2*$annualbasicpay)/100;
									$monthlypay=($annualbasicpay/12)-$tax;
							
							
								echo "<tr><td colspan=2 align=center><strong>Monthly Pay Slip</strong></td></tr>";
								
								echo "<tr><td><strong>Employee ID</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$id."</td></tr>";
								echo "<tr><td><strong>Name<strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$name."</td></tr>";
								
								
								echo "<tr><td><strong>DOB</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$dob."</td></tr>";
								echo "<tr><td><strong>Gender</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$gender."</td></tr>";
								
								echo "<tr><td><strong>Address/Husband name</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$address."</td></tr>";
								echo "<tr><td><strong>City</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$city."</td></tr>";

								echo "<tr><td><strong>Province</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$province."</td></tr>";
								echo "<tr><td><strong>Postal Code</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$postcode."</td></tr>";
								
								echo "<tr><td><strong>Email</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email."</td></tr>";
								echo "<tr><td><strong>Joinig Date</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$joindate."</td></tr>";

								echo "<tr><td><strong>Monthly Pay</strong></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$monthlypay."</td></tr>";
								
							}
					echo "<tr><td align=center><input type=button name=Print value=Print onclick=printData()></td><td align=center><input type=button id=pdfview value=GenratePDF></td></tr>";
					echo"</table></div>";
					echo "<div id='editor'></div>";
					mysql_close($conn);
?>
</form>
</div>
<!-- Footer-->

<?php
include_once("footer.php");
?>

</div>
</body>
</html>