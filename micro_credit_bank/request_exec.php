<?php

	include("include/config.php");

	$var = $_REQUEST['var'];
	$national_id = $_REQUEST['customer_nid'];
	//echo $var . " " . $national_id;
	$loan_type_id  = $_REQUEST['loan_type'];
	$interest_rate_id = $_REQUEST['interest_rate'];
	$loan_date     = $_REQUEST['loan_date'];
	$loan_status_id   = $_REQUEST['loan_status'];

	if($loan_type_id > 0 && $interest_rate_id > 0 && $loan_status_id > 0)
	{
		if($loan_type_id == 1) $loan_type = "Krishi";
		else if($loan_type_id == 2) $loan_type = "Fishery";
		else if($loan_type_id == 3) $loan_type = "Farm";
		else if($loan_type_id == 4) $loan_type = "Handcraft";
		
		$sql = "SELECT * FROM loan_category WHERE loan_type = '$loan_type' ";
		$result = mysql_query($sql);
		$cnt_table = mysql_num_rows($result);
		//var_dump($cnt_table);
		if($cnt_table > 0)
		{
			$ary = array();
			$ary = mysql_fetch_array($result);
			//echo var_dump($ary);
			$category_id = $ary['category_id'];
			//echo "hello - " . $category_id;
		}
		
		if($interest_rate_id == 1) $interest_rate = 4;
		else if($interest_rate_id == 2) $interest_rate = 5;
		else if($interest_rate_id == 3) $interest_rate = 8;
		else if($interest_rate_id == 4) $interest_rate = 10;
		
		if($loan_status_id == 1) $loan_status = "Running";
		else if($loan_status_id == 2) $loan_status = "Close";
		
		if($var == 1)
		{
			$qry = "INSERT INTO loan(national_id, category_id, interest_rate, taken_date, status)
			VALUES ('$national_id', '$category_id', '$interest_rate', '$loan_date' , '$loan_status') ";
			$result = mysql_query($qry);
			if($result)
			{ 
				header("Location: customer_loan_detail.php");
			}
			
			else
			{
				echo "Not added";
			}
		}

		else if($var == 0)
		{
			$sql = "DELETE FROM request WHERE national_id = '$national_id' ";
			$result = mysql_query($sql);
			echo var_dump($result);
			if($result)
			{
				//echo "Customer request has been delated";
				header("Location: request.php");
			}
			else
			{
				echo "Error deleting record" ;
			}
		}
	}

?>