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
				//echo 'this nid is exist';
				$qry = "SELECT * FROM loan_category WHERE category_id='$loan_type_id' ";
				$result = mysql_query($qry);
				
				if($result)
				{
					//echo " -- 1 . true --- ";
					
					if(mysql_num_rows($result))
					{
						//echo " -- 2 . true --- ";
						
						$ary = array();
						$ary = mysql_fetch_assoc($result);
						$due_amount = $ary['total_paid'] - $loan_amount;
						
						//echo " -- due amount = " . $due_amount;
						
						$sql = "INSERT INTO payment(national_id, amount_paid, due_amount, late_fine, payment_date, loan_id) 
								VALUES ('$national_id', '$loan_amount', $due_amount, '0', '$loan_date', '$loan_id') ";
									
						$sql_result = mysql_query($sql);
									
						if($sql_result)
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
					echo "Not added";
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