<?php include("include/config.php");
	  
	session_start(); 

	$designation = $_SESSION['designation'];

	if($_SESSION['designation'] == "Chairman")
	{
	  include("include/header_chairman.php");
	}

	else if($_SESSION['designation'] == "Manager")
	{
	  include("include/header_manager.php");
	}

	else if($_SESSION['designation'] == "Cash Officer")
	{
		include("include/header_cash_officer.php");
	}

	else
	{
	  include("include/header_admin.php");
	}

	session_write_close();
?>


<?php 

	session_start();
	$username = $_SESSION['username'];
	$qry = "SELECT * FROM board_of_directors";
	$result = mysql_query($qry);
	session_write_close();

	//echo var_dump($result);

?>


	<div class="w3-container" style="min-height:295px;height:auto;">
		 
		<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

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


<?php
	  
	//session_start(); 

	$designation = $_SESSION['designation'];

	if($_SESSION['designation'] == "Chairman")
	{
	  include("include/footer_chairman.php");
	}

	else if($_SESSION['designation'] == "Manager")
	{
	  include("include/footer_manager.php");
	}

	else if($_SESSION['designation'] == "Cash Officer")
	{
		include("include/footer_cash_officer.php");
	}

	else
	{
	  include("include/footer_admin.php");
	}

	session_write_close();
?>