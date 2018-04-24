<?php 
	
	include('include/config.php');
	
	if(isset($_SESSION['customer_nid']))
	{
		$national_id   = $_SESSION['customer_nid'];
	}
	
	else
	{
		$national_id   = $_REQUEST['nid'];
	}
	
	//echo "php -- loan form exec = " . $national_id;
	
	
	$loan_type_id  = $_REQUEST['loan_type'];
	$loan_date   = $_REQUEST['loan_date'];
	$loan_status_id   = $_REQUEST['loan_status'];
	
	$sql = "SELECT * FROM loan";
	$result = mysql_query($sql);
	if($result)
	{
		if(mysql_num_rows($result) > 0)
		{
			$bry = array();
			$bry = mysql_fetch_assoc($result);
			$loan_id = $bry['loan_id'] + 1;
		}
		
		else
		{
			$loan_id = 1;
		}
	}
	
	if($loan_type_id > 0 && $loan_status_id > 0)
	{
		$sql = "SELECT * FROM loan_category WHERE category_id = '$loan_type_id'";
		$result = mysql_query($sql);
		
		if($result)
		{
			$cnt_table = mysql_num_rows($result);
			
			if($cnt_table > 0)
			{
				$ary = array();
				$ary = mysql_fetch_assoc($result);
				$loan_type = $ary['loan_type'];
			}
		}
		
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
		
		if($loan_status_id == 1) $loan_status = "Running";
		else if($loan_status_id == 2) $loan_status = "Close";
		
		$qry = "INSERT INTO loan(loan_id, national_id, category_id, taken_date, status)
		VALUES ('$loan_id', '$national_id', '$category_id', '$loan_date' , '$loan_status') ";
		$result = mysql_query($qry);
		if($result)
		{
			echo "ok";
		}
		
		else
		{
			echo "Not added";
		}
	}


?>