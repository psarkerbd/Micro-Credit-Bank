<?php

	include("include/config.php");
	
	$name        = $_REQUEST['name'];
	$designation = $_REQUEST['designation'];
	$address     = $_REQUEST['address'];
	$contact     = $_REQUEST['contact'];
	$c_password  = $_REQUEST['c_password'];
	$username    = $_REQUEST['username'];
	
	$contact = "+880" . $contact;
	
	//echo $username;

	$sql = "UPDATE board_of_directors 
			SET name='$name', contact_address='$address', 
			contact_no='$contact', password='$c_password' WHERE username='$username' ";
	
	$result = mysql_query($sql);
	
	if($result)
	{
		echo "ok";
	}

?>