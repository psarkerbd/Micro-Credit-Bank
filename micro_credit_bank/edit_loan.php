<?php include("include/config.php"); ?>
<?php include("include/header_demand.php"); ?>


<div class="w3-container" style="min-height:295px;height:auto;">
		 
		<div class="w3-cell-row w3-row-padding w3-right w3-margin-top w3-margin-bottom">
			<form style="margin-left:100px;" class="w3-row-padding" method="post" action="<?php echo $_SERVER['PHP_SELF'];?> ">
				<input style="width:20%;" type="text" name="loan_title" placeholder="Loan title...">
				<input style="width:20%;" type="text" name="loan_amount" placeholder="Loan amount...">
				<input style="width:20%;" type="text" name="loan_interest" placeholder="Loan interest...">
				<input style="width:20%;" type="text" name="loan_validity" placeholder="validity...">
				<input type="submit" value="Submit">
			</form>
		
		</div>
		
<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$loan_title = $_REQUEST['loan_title'];
			
		if(!empty($loan_title))
		{
			$qry = "SELECT loan_type FROM loan_category WHERE loan_type = '$loan_title' ";
			$result = mysql_query($qry);
			//echo mysql_num_rows($result);
				
			if(mysql_num_rows($result) <= 0)
			{
				$loan_title = $_REQUEST['loan_title'];
				$loan_amount = $_REQUEST['loan_amount'];
				$loan_interest = $_REQUEST['loan_interest'];
				$loan_validity = $_REQUEST['loan_validity'];
				
				$loan_validity_up = $loan_validity + " year";
				
				$total_paid = $loan_amount + ($loan_amount / 100) * $loan_interest;
				
				$qry = "INSERT INTO loan_category (loan_type, loan_amount, total_paid, validity, interest) VALUES ('$loan_title' , '$loan_amount' , '$total_paid', '$loan_validity_up', '$loan_interest' ) ";
				$result = mysql_query($qry);
				//echo var_dump($result);
				$sql = "SELECT * FROM loan_category";
				$result = mysql_query($sql);
				if($result)
				{
					if(mysql_num_rows($result))
					{?>
					
						<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:500px;width:50%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

							<thead>
								<tr class="w3-teal">
									<th> Id no </th>
									<th> Loan Title </th>
									<th> Loan Amount </th>
									<th> Interest </th>
									<th> Total Paid </th>
									<th> Delete </th>
								</tr>
							</thead>
						<?php

						while($row = mysql_fetch_assoc($result))
						{
							?>
							
							<tr>
								<td> <?php echo $row['category_id']; ?> </td>
								<td> <?php echo $row['loan_type']; ?> </td>
								<td> <?php echo $row['loan_amount']; ?> </td>
								<td> <?php echo $row['interest']; ?> </td>
								<td> <?php echo $row['total_paid'] ?> </td>
								<td> <a href="loan_delete.php?id=<?php echo $row['category_id']; ?>"> <button class="w3-button w3-black" onclick="remove_note()">Yes</button></a> </td>
							</tr>
					<?php			
						} 
						?>	
					</table>
					
					<?php		
					}
				}
			}
				
			else
			{ ?>
			
				<div class="w3-row-padding w3-cell-row" style="font-family: Arial; text-align:center;">
						
					<p class="w3-panel w3-red"> Loan title is already added </p>
					
				</div>
			<?php
			
					$sql = "SELECT * FROM loan_category";
					$result = mysql_query($sql);
					if($result)
					{
						if(mysql_num_rows($result))
						{?>
					
							<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:500px;width:50%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

							<thead>
								<tr class="w3-teal">
									<th> Id no </th>
									<th> Loan Title </th>
									<th> Loan Amount </th>
									<th> Interest </th>
									<th> Total Paid </th>
									<th> Delete </th>
								</tr>
							</thead>
						<?php

							while($row = mysql_fetch_assoc($result))
							{
								?>
							
									<tr>
										<td> <?php echo $row['category_id']; ?> </td>
										<td> <?php echo $row['loan_type']; ?> </td>
										<td> <?php echo $row['loan_amount']; ?> </td>
										<td> <?php echo $row['interest']; ?> </td>
										<td> <?php echo $row['total_paid'] ?> </td>
										<td> <a href="loan_delete.php?id=<?php echo $row['category_id']; ?>"> <button class="w3-button w3-black" onclick="remove_note()">Yes</button></a> </td>
									</tr>
						<?php			
							} 
						?>	
							</table>
					<?php		
						}
					}
			}
		}
	}
?>

</div>

<script type="text/javascript">
	
	function remove_note()
	{
		window.alert("An Admin deleted successfully");
	}

</script>


<?php include("include/footer_demand.php"); ?>