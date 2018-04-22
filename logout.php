<?php
//session_start();
//unset($_SESSION);
//session_write_close();
$_SESSION['var'] = 0;
echo "logout ---- ";
echo var_dump($_SESSION['var']);
header('Refresh: 2; index.php');
die;
?>

$qry = "INSERT INTO loan(national_id, category_id, interest_rate, taken_date, status)
		VALUES ('$national_id', '$category_id', '$interest_rate', '$loan_date' , '$loan_status') ";
		$result = mysql_query($qry);
		if($result)
		{
			echo "ok";
		}
		
		else
		{
			echo "Not added";
		}