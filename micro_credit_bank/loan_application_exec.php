<?php 

	include("include/config.php");
	
	$customer_nid = $_REQUEST['customer_nid'];
	//echo "this is customer_nid -- " . $customer_nid;
	
	// perform query
	
	$sql = "SELECT national_id FROM customer WHERE national_id = '$customer_nid' ";
	$result = mysql_query($sql);
	if($result)
	{
		$cnt_table_customer = mysql_num_rows($result);
		
		if($cnt_table_customer > 0)
		{
			$qry_on_loan = "SELECT national_id FROM loan WHERE national_id = '$customer_nid' ";
			$qry_result_on_loan = mysql_query($qry_on_loan);
			
			if($qry_result_on_loan)
			{
				$cnt_table_loan = mysql_num_rows($qry_result_on_loan);
				
				if($cnt_table_loan <= 0)
				{
					echo "ok";
				}
			}
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