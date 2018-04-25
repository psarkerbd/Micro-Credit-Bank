<?php

	include("include/config.php");
	
	$national_id       = $_REQUEST['national_id'];
	$email             = $_REQUEST['email'];
	$permanent_address = $_REQUEST['permanent_address'];
	$present_address   = $_REQUEST['present_address'];
	$contact           = $_REQUEST['contact'];
	
	//echo $national_id . " " . $email . " " . $permanent_address;
	
	
	$sql = "UPDATE customer SET national_id='$national_id', email='$email', permanent_address='$permanent_address' 
	, present_address='$present_address', contact='$contact'  WHERE national_id='$national_id	' ";
	
	$result = mysql_query($sql);

	if ($result) 
	{
		echo "ok";
	} 
	else 
	{
		echo "Error updating record";
	}


?>