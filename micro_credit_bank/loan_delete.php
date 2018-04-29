<?php

	include("include/config.php");
	
	$category_id = $_REQUEST['id'];
	
	echo "loan delete page";
	echo $category_id;
	
	$qry = "DELETE from loan_category WHERE category_id='$category_id' ";
	$result = mysql_query($qry);

	if($result)
	{
		//echo "delete successfull";
		header("Location: loan_detail.php");
	}

	else
	{
		echo "not successfull";
	}
?>