<?php 
	include("include/config.php");
	include("include/header_demand.php");
?>


<?php 

	session_start();
	//$username = $_SESSION['username'];
	$qry = "SELECT * FROM customer";
	$result = mysql_query($qry);
	session_write_close();

	//echo var_dump($result);

?>


	<div class="w3-container" style="min-height:295px;height:auto;">
		 

	<?php 

	if (mysql_num_rows($result) > 0) 
	{
    	// output data of each row
	?>
		
		<table class="w3-table w3-container w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

			<thead>
				<tr class="w3-teal">
					<th> Name </th>
					<th> National ID </th>
					<th> Father's name </th>
					<th> Mother's name </th>
					<th> Birth Date </th>
					<th> Gender </th>
					<th> Permanent Address </th>
					<th> Present Address </th>
					<th> Mail </th>
					<th> Contact </th>
					<th> Mode </th>
				</tr>
			</thead>
	<?php
    	
		while($row = mysql_fetch_assoc($result)) 
    	{ 
    			//session_start();

    		?>

			<tr>
				<td class="w3-button w3-cyan"> <?php echo $row['customer_name']; ?> </td>
				<td class="w3-button w3-red"> <?php echo $row['national_id']; ?> </td>
				<td class="w3-button w3-blue-grey"> <?php echo $row['father_name']; ?> </td>
				<td class="w3-button w3-light-blue"> <?php echo $row['mother_name']; ?> </td>
				<td class="w3-button w3-brown"> <?php echo $row['dob']; ?> </td>
				<td class="w3-button w3-indigo"> <?php echo $row['gender']; ?> </td>
				<td class="w3-button w3-grey"> <?php echo $row['permanent_address']; ?> </td>
				<td class="w3-button w3-aqua"> <?php echo $row['present_address']; ?> </td>
				<td class="w3-button w3-khaki"> <?php echo $row['email']; ?> </td>
				<td class="w3-button w3-pale-green"> <?php echo $row['contact']; ?> </td>
				<td> <a href="pro_customer_update.php?national_id=<?php echo $row['national_id']; ?>" > Update </a> | <a href="pro_customer_delete.php?national_id=<?php echo $row['national_id']; ?>" > Delete </a> </td>
			</tr>
    	<?php 

   		} 

    	?>

    	</table> 
    <?php
	
	}
	
	else
	{?>
		<p class="w3-row w3-row-padding w3-panel w3-red w3-middle"> No customer record  </p>
<?php
	}

?>

</div>


<?php
	include("include/footer_demand.php");
?>