<?php 
	
	include("include/config.php");
	
	$national_id = $_REQUEST['national_id'];
	echo $national_id;
	
	$sql = "SELECT customer_id FROM customer WHERE national_id='$national_id'";
	$sql_result = mysql_query($sql);
	
	//var_dump($sql_result);
	
	if($sql_result)
	{
		$row = mysql_fetch_array($sql_result);
		$customer_id = $row['customer_id'];
		
		$sql = "DELETE FROM customer WHERE customer_id = '$customer_id' ";
		$result = mysql_query($sql);
		
		if($result)
		{
			header("Location: pro_customer_detail.php");
		}
		
		else
		{
			echo "There is no any entry that type";
		}
		
	}
	else
	{
		echo "No entry that type";
	}
?>