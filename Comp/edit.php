<?php
echo ("	<head><title>Edit Employee Form</title></head>
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<br><link   rel='stylesheet' type='text/css' href='index.css'/><body>
		");

include_once "connect.php";	

$db="comp";
$emp_code=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$p_name=$_POST['p_name'];
$cont=$_POST['cont'];
$email=$_POST['email_id'];
$depat=$_POST['depat'];
$division=$_POST['division'];
$desig=$_POST['desig'];

	$db_handle=connect();
	$select_db=mysql_select_db($db,$db_handle);
	if (!$select_db)echo"<h1>!!! Database Not Found !!!</h1>";
	
	$sql="UPDATE emp SET
					name='$emp_name',
					gender='$gender',
					address='$address',
					dob='$dob',
					parent='$p_name',
					contact='$cont',
					email='$email',
					depat='$depat',
					division='$division',
					desig='$desig'
					 WHERE emp_no='$emp_code' ";	
			$query=mysql_query($sql);
				echo ("<div class='search_php' name='ins_di'>
					<a class='gray right_button' href='edit.html'>Back</a> <a class='gray' href='index.html'>Home</a><br/><br/>  
					");
			if (!$query)die(mysql_error());
			echo "<p align='center'>UPDATED</p> </div>";
?>