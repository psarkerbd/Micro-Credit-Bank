<?php include("include/config.php"); ?>
<?php include("include/header_demand.php"); ?>


<div class="w3-container" style="min-height:295px;height:auto;">


<?php 

	$customer_nid = $_REQUEST['customer_nid'];
	//echo "customer_nid = " . $customer_nid;
	$sql = "SELECT * FROM customer c , loan_category lcat , loan l WHERE 
	l.national_id = '$customer_nid' AND c.national_id = l.national_id AND lcat.category_id = l.category_id "; // first time join query in MySQL
	$result_sql = mysql_query($sql);

	if($result_sql)
	{
		$cnt_table_result_sql = mysql_num_rows($result_sql);

		if($cnt_table_result_sql > 0)
		{
			

			$cunt_qry = "SELECT COUNT(*) AS total FROM loan WHERE national_id='$customer_nid' ";
			$cunt_qry_result = mysql_query($cunt_qry);
			if($cunt_qry_result)
			{
				$take_row = mysql_fetch_array($cunt_qry_result);
				$loan_total = $take_row['total'];
				//echo $loan_total;
			}
			
			?>
			
			<p class="w3-middle w3-center w3-row-padding w3-border w3-margin-top w3-black" style="font-family: Arial; font-weight:bold;" > Loan Taken(<?php echo $loan_total; ?>) </p>
			
			<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:20px; margin-bottom: 50px; font-family: Arial; ">

			<thead>
				<tr class="w3-teal">
					<th> NID </th>
					<th> Name </th>
					<th> Contact </th>
					<th> Loan type </th>
					<th> Loan Amount </th>
					<th> Interest(%) </th>
					<th> Have to be paid </th>
					<th> Loan Validity </th>
					<th> Date </th>
					<th> Status </th>
				</tr>
			</thead>
			
			
<?php			
			
			while($row = mysql_fetch_assoc($result_sql))
			{ 	
?>

				<tr>
					<td> <?php echo $row['national_id']; ?> </td>
					<td> <?php echo $row['customer_name']; ?> </td>
					<td> <?php echo $row['contact']; ?> </td>
					<td> <?php echo $row['loan_type']; ?> </td>
					<td> <?php echo $row['loan_amount']; ?> </td>
					<td> <?php echo $row['interest']; ?> </td>
					<td> <?php echo $row['total_paid']; ?> </td>
					<td> <?php echo $row['validity']; ?> </td>
					<td> <?php echo $row['taken_date']; ?> </td>
					<td> <?php echo $row['status']; ?> </td>
				</tr>		
<?php	
		}
?>
			
			</table>
			
<?php			
			$qry = "SELECT * FROM payment p, loan l, loan_category lcat WHERE p.national_id='$customer_nid' AND p.loan_id=l.loan_id AND l.category_id=lcat.category_id ";
			
			$qry_result = mysql_query($qry);
			
			if($qry_result)
			{
				$cnt_table_qry_result = mysql_num_rows($qry_result);
				
				if($cnt_table_qry_result > 0)
				{
					?>
					
					<p class="w3-middle w3-center w3-row-padding w3-border w3-margin-top w3-blue" style="font-family: Arial; font-weight:bold;" > Payment </p>
			
					<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:20px; margin-bottom: 50px; font-family: Arial; ">

					<thead>
						<tr class="w3-teal">
							<th> NID </th>
							<th> Loan type </th>
							<th> Loan Amount </th>
							<th> Interest(%) </th>
							<th> Have to be paid </th>
							<th> Loan Validity </th>
							<th> Paid </th>
							<th> Due </th>
							<th> Date </th>
							<th> Status </th>
						</tr>
					</thead>
	
	<?php			
					while($row=mysql_fetch_assoc($qry_result))
					{
						?>
						
						<tr>
							<td> <?php echo $row['national_id']; ?> </td>
							<td> <?php echo $row['loan_type']; ?> </td>
							<td> <?php echo $row['loan_amount']; ?> </td>
							<td> <?php echo $row['interest']; ?> </td>
							<td> <?php echo $row['total_paid']; ?> </td>
							<td> <?php echo $row['validity']; ?> </td>
							<td> <?php echo $row['amount_paid']; ?> </td>
							<td> <?php echo $row['due_amount']; ?> </td>
							<td> <?php echo $row['payment_date']; ?> </td>
							<td> <?php echo $row['status']; ?> </td>
						</tr>
	<?php
					} 
					
		?>
					
					</table>
	<?php				
				}
				
				else
				{
					?>
					
					<p class="w3-middle w3-center w3-row-padding w3-border w3-margin-top w3-red" style="font-family: Arial; font-weight:bold;" > No Payment Records yet </p>
	<?php				
				}
			}
		
		
		}
		
		else
		{
			?>
			
			<p class="w3-panel w3-middle w3-red w3-row-padding" style="font-family:Arial; text-align: center"> No Records </p>
<?php		
		}
	}

?>


</div>



<?php include("include/footer_demand.php"); ?>