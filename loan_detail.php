<?php include("include/header_demand.php"); ?>

<div class="w3-container" style="min-height:295px;height:auto;">


<?php

	include("include/config.php");
	
	//echo "loan detail page";
	
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
						<td> <a href="loan_delete.php?id=<?php echo $row['category_id']; ?>"> <button class="w3-button w3-black" onclick="remove_note()">Yes</button></a> </td>
					</tr>
		<?php			
			} 
		?>	
			</table>
	<?php		
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
