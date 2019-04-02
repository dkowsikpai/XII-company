<?php
echo ("	<head><title>Employee Form</title></head>
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<br><link   rel='stylesheet' type='text/css' href='index.css'/><body>
		");

include_once "connect.php";	

$db="comp";

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
	if (!$select_db){
		$sql="CREATE DATABASE comp;";
		$query=mysql_query($sql);
		if (!$query)die(mysql_error());

		$sql="USE comp;";
		$query=mysql_query($sql);
		if (!$query)die(mysql_error());

		$sql="CREATE TABLE `emp` (
				  `name` varchar(25) NOT NULL,
				  `gender` char(2) NOT NULL,
				  `address` varchar(50) NOT NULL,
				  `dob` date NOT NULL,
				  `parent` varchar(25) NOT NULL,
				  `contact` int(12) NOT NULL,
				  `emp_no` int(5) NOT NULL auto_increment,
				  `depat` varchar(20) NOT NULL,
				  `division` varchar(20) NOT NULL,
				  `desig` varchar(20) NOT NULL,
				  `email` varchar(30) NOT NULL,
				  `del` int(1) NOT NULL default '0',
				  `basic_pay` decimal(8,2) NOT NULL,
				  `da` decimal(8,2) NOT NULL,
				  `pf` decimal(8,2) NOT NULL,
				  `hra` decimal(8,2) NOT NULL,
				  `net_sal` decimal(10,2) NOT NULL,
				  PRIMARY KEY  (`emp_no`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;";
		$query=mysql_query($sql);
		if (!$query)die(mysql_error());
			$db_handle=connect();
	$select_db=mysql_select_db($db,$db_handle);
	}//echo"<h1>!!! Database Not Found !!!</h1>";
	
	$sql="INSERT INTO emp(
					name,
					gender,
					address,
					dob,
					parent,
					contact,
					email,
					depat,
					division,
					desig
					) VALUES (
					'$emp_name',
					'$gender',
					'$address',		
					'$dob',
					'$p_name',
					'$cont',
					'$email',
					'$depat',
					'$division',
					'$desig'			
					)";	
			$query=mysql_query($sql);
				echo ("<div class='search_php' name='ins_di'>
					<a class='gray right_button' href='insert.html'>Back</a> <a class='gray' href='index.html'>Home</a><br/><br/>  
					");
			if (!$query)die(mysql_error());
			echo "<p align='center'> INSERTED</p> </div>";
?>