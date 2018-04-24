<?php include("include/config.php"); ?>
<?php include("include/header_demand.php"); ?>


<div class="w3-container" style="min-height:295px;height:auto;">

<?php 

	$sql = "SELECT * FROM customer a , loan_category b , loan c WHERE a.national_id = c.national_id AND b.category_id = c.category_id "; // first time join query in MySQL
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
					<th> Father's Name </th>
					<th> Mother's Name </th>
					<th> Contact </th>
					<th> Loan type </th>
					<th> Interest(%) </th>
					<th> Have to paid </th>
					<th> Loan Validity </th>
					<th> Loan Amount </th>
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
					<td> <?php echo $row['father_name']; ?> </td>
					<td> <?php echo $row['mother_name']; ?> </td>
					<td> <?php echo $row['contact']; ?> </td>
					<td> <?php echo $row['loan_type']; ?> </td>
					<td> <?php echo $row['interest']; ?> </td>
					<td> <?php echo $row['total_paid']; ?> </td>
					<td> <?php echo $row['validity']; ?> </td>
					<td> <?php echo $row['loan_amount']; ?> </td>
					<td> <?php echo $row['taken_date']; ?> </td>
					<td> <?php echo $row['status']; ?> </td>
				</tr>		
	<?php	}
	?>
			
			</table>
	<?php		
		}
	}

?>


</div>



<?php include("include/footer_demand.php"); ?>