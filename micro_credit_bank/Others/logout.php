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
		
		
		
<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
					<label for="fname">Loan Date:</label>
				</div>
				
				<div class="w3-col w3-left-align w3-border"  style="width:70%;">
					<!-- <input class="w3-input w3-border" method = "post" type="text" id="appointment_date" placeholder="Employee appoint date..." required/> -->
					<input class="w3-input w3-border" type="date" id="myDate" required />
				</div>
			
			</div>