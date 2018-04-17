<?php include("include/header_admin.php");?>
<?php include("include/config.php");?>


<?php 

	session_start();
	//$username = $_SESSION['username'];
	$qry = "SELECT * FROM customer";
	$result = mysql_query($qry);
	session_write_close();

	//echo var_dump($result);

?>


	<div class="w3-container" style="min-height:295px;height:auto;">
		 
		<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

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
				</tr>
			</thead>

	<?php 

	if (mysql_num_rows($result) > 0) 
	{
    	// output data of each row

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
			</tr>
    	<?php 

   		} 

    	?>

    	</table> 
    <?php
	
	}

	?>

</div>


<?php include("include/footer.php");?>