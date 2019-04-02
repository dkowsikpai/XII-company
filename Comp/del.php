<?php
echo ("	<head><title>Delete Employee</title></head>
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<br><link   rel='stylesheet' type='text/css' href='index.css'/><body>
		");
include_once "connect.php";	
$db="comp";
$emp_no=$_POST['emp_no'];


	$db_handle=connect();
	$select_db=mysql_select_db($db,$db_handle);
	if (!$select_db)echo"<h1>!!! Database Not Found !!!</h1>";


	$sql='SELECT * FROM emp WHERE del=0';
			$query=mysql_query($sql);
				echo ("<div class='search_php' name='ins_di'>
					<a class='gray right_button' href='del.html'>Back</a> <a class='gray' href='index.html'>Home</a><br/><br/>  
					");
			while($data=mysql_fetch_array($query)){
					if ($emp_no==$data['emp_no']){
						$sql="UPDATE emp SET del=1 WHERE emp_no='$emp_no' ";
						$del_data=mysql_query($sql);

					}
			}	
				echo"<p align='center'>DELETED</p> </div>";
		 
		 
		 
		
	
?>