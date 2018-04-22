<?php 

	include("include/config.php");
	
	$customer_nid = $_REQUEST['customer_nid'];
	//echo "this is customer_nid -- " . $customer_nid;
	
	// perform query
	
	$sql = "SELECT national_id FROM loan WHERE national_id = '$customer_nid' ";
	$result = mysql_query($sql);
	if($result)
	{
		$cnt_table = mysql_num_rows($result);
		
		if($cnt_table <= 0)
		{
			echo "ok";
			//echo "all right";
		}
	}
	
	else
	{
		echo "Query failed";
	}
?>