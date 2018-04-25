<?php include("include/config.php"); ?>

<?php

	$national_id  = $_REQUEST['national_id'];
	$loan_type_id = $_REQUEST['loan_type']; // loan_id on loan table
	$loan_amount  = $_REQUEST['loan_amount'];
	$loan_date    = $_REQUEST['loan_date'];
	
	$qry = "SELECT * FROM loan WHERE national_id='$national_id' AND category_id = '$loan_type_id' ";
	$result = mysql_query($qry);
	
	//echo $loan_type_id . " " . $loan_amount;
	
	if($result)
	{
		$cnt_table = mysql_num_rows($result);
		
		if($cnt_table > 0)
		{
			$flag = 0;
			
			while($row = mysql_fetch_assoc($result))
			{
				if($row['category_id'] == $loan_type_id)
				{
					$loan_id = $row['loan_id'];
					$flag = 1;
					break;
				}
			}
			
			if($flag)
			{
				// insert into payment
				
				$qry = "SELECT SUM(amount_paid) AS totalAmount FROM payment WHERE national_id='$national_id' AND loan_id='$loan_id' ";
				
				$result = mysql_query($qry);
				
				if($result)
				{
					$row = mysql_fetch_assoc($result); 
					$sum = $row['totalAmount'];
					
					//echo "sum = " . $sum;
					
					$in_qry = "SELECT * FROM loan_category WHERE category_id='$loan_type_id' ";
					
					$in_result = mysql_query($in_qry);
					
					if($in_result)
					{
						$ary = mysql_fetch_assoc($in_result);
						$total_paid = $ary['total_paid'];
						
						if($sum)
						{
							$due_amount = $total_paid - ($sum + $loan_amount);
							//echo " sum due = " . $due_amount;
						}
						
						else
						{
							$due_amount = $total_paid - $loan_amount;
							//echo " loan due = " . $due_amount;
						}
					}
					
					else
					{
						$ary = mysql_fetch_assoc($in_result);
						$due_amount = $total_paid - $loan_amount;
					}
					
					if($due_amount >= 0)
					{
						$sql = "INSERT INTO payment(national_id, amount_paid, due_amount, late_fine, payment_date, loan_id) 
						VALUES ('$national_id', '$loan_amount', $due_amount, '0', '$loan_date', '$loan_id') ";
					
						$result = mysql_query($sql);
						
						if($result)
						{
							echo "ok";
						}
						else
						{
							echo "Not added";
						}
					}
					
					else
					{
						echo "Your Payment is completed";
					}
				}
				
				else
				{
					$in_qry = "SELECT * FROM loan_category WHERE category_id='$loan_type_id' ";
					$in_result = mysql_query($in_qry);
					
					if($in_result)
					{
						$ary = mysql_fetch_assoc($in_result);
						$total_paid = $ary['total_paid'];
						echo $total_paid;
						$due_amount = $total_paid - $sum;
						echo "  ----   " . $due_amount;
					}
					
					else
					{
						$due_amount = $total_paid - $loan_amount;
						echo $total_paid;
						$due_amount = $total_paid - $sum;
						echo "  ----   " . $due_amount;
					}
					
					$sql = "INSERT INTO payment(national_id, amount_paid, due_amount, late_fine, payment_date, loan_id) 
						VALUES ('$national_id', '$loan_amount', $due_amount, '0', '$loan_date', '$loan_id') ";
					
					$result = mysql_query($sql);
					if($result)
					{
						echo "ok";
					}
					else
					{
						echo "Not added";
					}
				}
			}
			
			else
			{
				echo "Not belongs to this loan";
			}
		}
		
		else
		{
			echo "Not belongs to this loan";
		}
	}
	
	else
	{
		echo "Ignore customer";
	}


?>