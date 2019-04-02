<?php
echo ("	<head><title>View Employee Details</title></head>
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<br><link   rel='stylesheet' type='text/css' href='index.css'/><body>
		");
$i=0;
$tot_sal=0;
$b_pay=0;
$da_pay=0;
$pf_pay=0;
$hra_pay=0;
$avg_allo=0;

include_once "connect.php";	
$db="comp";
	$db_handle=connect();
	$select_db=mysql_select_db($db,$db_handle);
	if (!$select_db)echo"<h1>!!! Database Not Found !!!</h1>";


	$sql='SELECT * FROM emp WHERE del=0';
			$query=mysql_query($sql);
				echo ("<div class='search_php' name='ins_di'>
					<a class='gray' href='index.html'>Home</a><br/><br/>  
					<table  border=1><th>Employee No.</th><th>Name</th><th>Gender</th><th>Address</th><th>Date of Birth</th><th>Parent Name</th><th>Contact</th><th>Email</th><th>Department</th><th>Division</th><th>Designation</th><th>Basic Pay</th><th>DA</th><th>HRA</th><th>PF</th><th>Net Salary</th>"
					);
			while($data=mysql_fetch_array($query)){
				$i++;
				echo ("<tr>"
						."<td><center>".$data['emp_no']."</td></center>"
						."<td><center>".$data['name']."</td></center>"
						."<td><center>".$data['gender']."</td></center>"
						."<td><center>".$data['address']."</td></center>"
						."<td><center>".$data['dob']."</td></center>"
						."<td><center>".$data['parent']."</td></center>"
						."<td><center>".$data['contact']."</td></center>"
						."<td><center>".$data['email']."</td></center>"
						."<td><center>".$data['depat']."</td></center>"
						."<td><center>".$data['division']."</td></center>"
						."<td><center>".$data['desig']."</td></center>"
						."<td><center>".$data['basic_pay']."</td></center>"
						."<td><center>".$data['da']."</td></center>"
						."<td><center>".$data['hra']."</td></center>"
						."<td><center>".$data['pf']."</td></center>"
						."<td><center>".$data['net_sal']."</td></center>"

					."</tr>");
				$tot_sal +=$data['net_sal'];
				$da_pay +=$data['da'];
				$b_pay +=$data['basic_pay'];
				$hra_pay +=$data['hra'];
				$pf_pay +=$data['pf'];
			}
			$avg_allo=$tot_sal/$i;
			echo"</table>";	
			echo "<br/><label class='labl_cls_php' >No of data entered:</label><input type='text' class='inputs_php' readonly='readonly' value='$i'/>";
			echo "<br/><label class='labl_cls_php' >Total Basic Pay of all:</label><input type='text' class='inputs_php' readonly='readonly' value='$b_pay'/>";
			echo "<br/><label class='labl_cls_php' >Total DA Pay of all:</label><input type='text' class='inputs_php' readonly='readonly' value='$da_pay'/>";
			echo "<br/><label class='labl_cls_php' >Total HRA Pay of all:</label><input type='text' class='inputs_php' readonly='readonly' value='$hra_pay'/>";
			echo "<br/><label class='labl_cls_php' >Total PF Pay of all:</label><input type='text' class='inputs_php' readonly='readonly' value='$pf_pay'/>";
			echo "<br/><label class='labl_cls_php' >Total Salary of all:</label><input type='text' class='inputs_php' readonly='readonly' value='$tot_sal'/>";
			echo "<br/><label class='labl_cls_php' >Average allowance of company:</label><input type='text' class='inputs_php' readonly='readonly' value='$avg_allo'/>";
			echo"</div>";

		 
		 
		
echo "</body>";
	
?>