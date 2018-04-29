<?php

	include("include/config.php");
	
	$national_id = $_REQUEST['customer_nid'];
	
	$sql = "SELECT * FROM loan WHERE national_id = '$national_id' ";
	$sql_result = mysql_query($sql);
	
	if($sql_result)
	{
		$cnt_table = mysql_num_rows($sql_result);
		
		if($cnt_table > 0)
		{
			echo "ok";
		}
		
		else
		{
			echo "error1";
		}
	}
	
	else
	{
		echo "error1";
	}

?>
