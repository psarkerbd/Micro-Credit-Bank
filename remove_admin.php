<?php include("include/header_admin.php");?>
<?php include("include/config.php");?>


<?php 

	$qry = "SELECT username, name FROM board_of_directors";
	$result = mysql_query($qry);

	//echo var_dump($result);

?>


	<div class="w3-container" style="min-height:295px;height:auto;">
		 
		<table class="w3-table-all w3-container w3-middle w3-card-4" style="max-width:600px;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial;">
				    
			<thead>
				<tr class="w3-teal">
					<th>Name</th>
					<th>Username</th>
					<th>Delete</th>
				</tr>
			</thead>

	<?php 

	if (mysql_num_rows($result) > 0) 
	{
    	// output data of each row
    	$cnt = 0;

    	while($row = mysql_fetch_assoc($result)) 
    	{ 
    			//session_start();
    			$cnt += 1;
    			$_GET['cnt'] = $row['username'];
    			$username = $row['username'];

    		?>

			<tr>
				<td> <?php echo $row['name']; ?> </td>
				<td> <?php echo $row['username']; ?> </td>
				<td> <a href="remove_admin_exec.php?username=<?php echo $row['username']; ?>"> <button class="w3-button" onclick="remove_note()">Yes</button></a> </td>
			</tr>
    	<?php 

   		} 

    	?>

    	</table> 
    <?php
	
	}

	?>

</div>

<script type="text/javascript">
	
	function remove_note()
	{
		window.alert("An Admin deleted successfully");
	}

</script>


<?php include("include/footer.php");?>