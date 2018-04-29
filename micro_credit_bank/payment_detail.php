<?php include("include/config.php"); ?>
<?php include("include/header_demand.php"); ?>


<div class="w3-container" style="min-height:295px;height:auto;">


<?php 

	$sql = "SELECT * FROM customer a , loan_category b , loan c, payment d WHERE a.national_id = c.national_id AND b.category_id = c.category_id AND d.loan_id=c.loan_id"; // first time join query in MySQL
	$result_sql = mysql_query($sql);

	if($result_sql)
	{
			
		
		$cnt_table_result_sql = mysql_num_rows($result_sql);

		if($cnt_table_result_sql > 0)
		{?>
			<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

			<thead>
				<tr class="w3-teal">
					<th> NID </th>
					<th> Name </th>
					<th> Contact </th>
					<th> Loan type </th>
					<th> Loan Validity </th>
					<th> Interest(%) </th>
					<th> Loan Amount </th>
					<th> Have to paid </th>
					<th> Paid </th>
					<th> Due </th>
					<th> Date </th>
					<th> Status </th>
				</tr>
			</thead>
			
			
		<?php	
			
			while($row = mysql_fetch_assoc($result_sql))
			{ 
		
				if($row['due_amount'] == 0)
				{
					$status      = "close";
					$national_id = $row['national_id'];
					$loan_id     = $row['loan_id'];
					$category_id = $row['category_id'];
					$t_date      = $row['taken_date'];
					$qry_loan = "UPDATE loan SET status='$status' WHERE national_id='$national_id' AND category_id='$category_id' ";
					$qry_loan_result = mysql_query($qry_loan);
					if($qry_loan_result)
					{
						?>
						
						<tr>
							<td> <?php echo $row['national_id']; ?> </td>
							<td> <?php echo $row['customer_name']; ?> </td>
							<td> <?php echo $row['contact']; ?> </td>
							<td> <?php echo $row['loan_type']; ?> </td>
							<td> <?php echo $row['validity']; ?> </td>
							<td> <?php echo $row['interest']; ?> </td>
							<td> <?php echo $row['loan_amount']; ?> </td>
							<td> <?php echo $row['total_paid']; ?> </td>
							<td> <?php echo $row['amount_paid']; ?> </td>
							<td> <?php echo $row['due_amount']; ?> </td>
							<td> <?php echo $row['payment_date']; ?> </td>
							<td> <?php echo $status; ?> </td>
						</tr>
<?php						
					}
					
					else
					{
						echo "not good";
					}
				}
				
				else
				{
					$status = $row['status'];
				?>
					
					<tr>
						<td> <?php echo $row['national_id']; ?> </td>
						<td> <?php echo $row['customer_name']; ?> </td>
						<td> <?php echo $row['contact']; ?> </td>
						<td> <?php echo $row['loan_type']; ?> </td>
						<td> <?php echo $row['validity']; ?> </td>
						<td> <?php echo $row['interest']; ?> </td>
						<td> <?php echo $row['loan_amount']; ?> </td>
						<td> <?php echo $row['total_paid']; ?> </td>
						<td> <?php echo $row['amount_paid']; ?> </td>
						<td> <?php echo $row['due_amount']; ?> </td>
						<td> <?php echo $row['payment_date']; ?> </td>
						<td> <?php echo $status; ?> </td>
					</tr>
<?php					
				}
				
		
			}
	?>
			
			</table>
	<?php		
		}
		
		else
		{
			?>
			
			<p class="w3-middle w3-center w3-row-padding w3-panel w3-red w3-margin-top" style="font-family:Arial"> No Records yet.. </p>
	<?php
			
		}
	}
	
	else
	{
		?>
		
		<p class="w3-middle w3-center w3-row-padding w3-panel w3-red w3-margin-top"> No Records yet.. </p>
<?php
		
	}

?>


</div>






<?php include("include/footer_demand.php"); ?>