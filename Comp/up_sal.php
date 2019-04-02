<?php
echo ("	<head><title>Update Salary Details</title></head>
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<br><link   rel='stylesheet' type='text/css' href='index.css'/><body>
		");

include_once "connect.php";	

$db="comp";

$emp_no=$_POST['emp_no'];
$basic_pay=$_POST['basic_pay'];
$da=$_POST['da'];
$pf=$_POST['pf'];
$hra=$_POST['hra'];


	$db_handle=connect();
	$select_db=mysql_select_db($db,$db_handle);
	if (!$select_db)echo"<h1>!!! Database Not Found !!!</h1>";
	
	$da=($da/100)*$basic_pay;
	$pf=($pf/100)*$basic_pay;
	$hra=($hra/100)*$basic_pay;
	$net_sal=$basic_pay+$da+$hra-$pf;
	
	
	$sql="UPDATE emp SET
				basic_pay='$basic_pay',
				da='$da',
				pf='$pf',
				hra='$hra', 
				net_sal='$net_sal' 
				WHERE emp_no='$emp_no' AND del=0";	
				
				echo ("<div class='search_php' name='ins_di'>
					<a class='gray right_button' href='up_sal.html'>Back</a> <a class='gray' href='index.html'>Home</a><br/><br/>  
					");
					
	$query=mysql_query($sql);
				if (!$query)die(mysql_error());
			echo "<br/><label class='labl_cls_php' >Basic Pay:</label><input type='text' class='inputs_php' readonly='readonly' value='$basic_pay'/>";
			echo "<br/><label class='labl_cls_php' >DA:</label><input type='text' class='inputs_php' readonly='readonly' value='$da'/>";
			echo "<br/><label class='labl_cls_php' >HRA:</label><input type='text' class='inputs_php' readonly='readonly' value='$hra'/>";
			echo "<br/><label class='labl_cls_php' >PF:</label><input type='text' class='inputs_php' readonly='readonly' value='$pf'/>";
			echo "<br/><label class='labl_cls_php' >Net Salary:</label><input type='text' class='inputs_php' readonly='readonly' value='$net_sal'/>";
			echo "<p align='center'> UPDATED  <br></p> </div> ";
?>