<?php
	include("include/config.php");

	//echo "i am here....";

	if(isset($_REQUEST['name'], $_REQUEST['designation'], $_REQUEST['myDate'], $_REQUEST['address'], $_REQUEST['contact'], $_REQUEST['username'], $_REQUEST['c_password']))
	{
		$name=trim($_REQUEST['name']);
		$designation_id=trim($_REQUEST['designation']);
		$myDate=trim($_REQUEST['myDate']);
		$address=trim($_REQUEST['address']);
		$contact=trim($_REQUEST['contact']);
		$username=trim($_REQUEST['username']);
		$c_password=trim($_REQUEST['c_password']);

		//echo $name. " on submit.exec";

		if($designation_id == 0)
		{ 
	?>

			<p class="w3-panel w3-red" style="margin-top: 25px; font-family: sans-serif;">
				<?php 
					echo "Please fill up the form correctly";
				?>
			</p> 
<?php   }

		else
		{
			//echo var_dump($designation_id);

			if($designation_id == "1") $designation = "Chairman";
			else if($designation_id == "2") $designation = "Manager";
			else if($designation_id == "3") $designation = "Assistant Manager";
			else if($designation_id == "4") $designation = "Area Manager";
			else if($designation_id == "5") $designation = "Cash Officer";
			else if($designation_id == "6") $designation = "Public Relationship Officer";

			$contact = "+880".$contact;

			//echo $name. " ". $designation . " " . $myDate . " " . $address. " " . $contact. " " . $username. " " . $c_password;
		
			$qry = "INSERT INTO board_of_directors (username, password, name, designation, date_of_appointment, contact_address, contact_no) VALUES ('$username', '$c_password', '$name', '$designation', '$myDate', '$address', '$contact')";

			$result = mysql_query($qry);
			//echo var_dump($result);
			
			if($result)
			{
				session_start();
				$_SESSION['username'] = $username; 
				$_SESSION['c_password'] = $c_password;
				$_SESSION['name'] = $name;
				//$_SESSION['designation'] = $designation;
				session_write_close();
				echo "ok";

	?>

<?php

			}

			else
			{ 
				?>
				
				<p class="w3-panel w3-red" style="margin-top: 25px; font-family: sans-serif;">
					<?php 
					echo "Username is already added as Admin";
					?>
				</p> 
	 		
	 		<?php

			}
		}
	}

?>