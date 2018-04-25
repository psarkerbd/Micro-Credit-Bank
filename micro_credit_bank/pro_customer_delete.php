<?php 
	include("include/config.php");
	
	$national_id = $_REQUEST['national_id'];
	//echo $national_id;
	
	$qry = "DELETE FROM customer WHERE national_id = '$national_id' ";
	$result = mysql_query($qry);
	
	if($result)
	{
		header("location: pro_customer_detail.php");
	}
	
	else
	{
		echo "Row did not delete.";
	}
?>