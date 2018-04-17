<?php include("include/header_admin.php");?>
<?php include("include/config.php");?>


<?php 

	session_start();
	$username = $_SESSION['username'];
	$qry = "SELECT * FROM board_of_directors WHERE username = '$username' ";
	$result = mysql_query($qry);
	session_write_close();

	//echo var_dump($result);

?>


	<div class="w3-container" style="min-height:295px;height:auto;">
		 
		<table class="w3-table w3-container w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

			<thead>
				<tr class="w3-teal">
					<th> Name </th>
					<th> Designation </th>
					<th> Address </th>
					<th> Contact </th>
					<th> Appointment Date </th>
					<th> Username </th>
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
				<td> <?php echo $row['name']; ?> </td>
				<td> <?php echo $row['designation']; ?> </td>
				<td> <?php echo $row['contact_address']; ?> </td>
				<td> <?php echo $row['contact_no']; ?> </td>
				<td> <?php echo $row['date_of_appointment']; ?> </td>
				<td> <?php echo $row['username']; ?> </td>
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