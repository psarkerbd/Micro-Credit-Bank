<?php include("include/config.php"); ?>

<?php
	
	//session_start();

	session_start();

	//echo $_SESSION['username'];
	$username = $_SESSION['username'];

	if(isset($_REQUEST['designation'], $_REQUEST['address'], $_REQUEST['contact'], $_REQUEST['c_password']))
	{
		$designation_id = trim($_REQUEST['designation']);
		$address = trim($_REQUEST['address']);
		$contact = trim($_REQUEST['contact']);
		$c_password = trim($_REQUEST['c_password']);

		$designation = "";
		if($designation_id == "1") $designation = "Chairman";
		else if($designation_id == "2") $designation = "Director";
		else if($designation_id == "3") $designation = "Manager";
		else if($designation_id == "4") $designation = "Administration";
		else if($designation_id == "5") $designation = "Treasurer";

		$flag = 0;
		$result="";
		$contact = "+880". $contact;
		//echo $contact;

		if($designation != "")
		{
			$qry = "UPDATE board_of_directors SET designation='$designation' WHERE username= '$username' ";
			$result = mysql_query($qry);
		}

		if($address != "")
		{
			$qry = "UPDATE board_of_directors SET contact_address='$address' WHERE username= '$username' ";
			$result = mysql_query($qry);
		}

		if(strlen($contact) > 4)
		{
			//echo $contact;
			$qry = "UPDATE board_of_directors SET contact_no='$contact' WHERE username= '$username' ";
			$result = mysql_query($qry);
		}

		if($c_password != "")
		{
			$qry = "UPDATE board_of_directors SET password='$c_password' WHERE username= '$username' ";
			$result = mysql_query($qry);
		}

		if($result)
		{ ?>
			
			<p class="w3-panel w3-blue" style="margin-top: 25px; font-family: sans-serif;">
				<?php 
					echo "Recored Updated Successfully. ";
				?>
				<a href="updated_view.php" style="font-family: sans-serif;">View</a>
			</p>
<?php	}

		else
		{ 
	?>
			<p class="w3-panel w3-blue" style="margin-top: 25px; font-family: sans-serif;"> No Recored Updated </p>

	<?php	
		}
	}

?>
