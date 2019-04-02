<?php
	function connect(){
		$server="localhost";
		$username="root";
		$password="a";
		$handle=mysql_connect($server,$username,$password);
		if(!handle) die("Couldn't connect to server".mysql_error());
			else return $handle;
	}
?>