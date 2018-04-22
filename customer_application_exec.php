<?php

	include("include/config.php");

	if(isset($_REQUEST['name'], $_REQUEST['f_name'], $_REQUEST['m_name'], $_REQUEST['myDate'], $_REQUEST['permanent_address'], $_REQUEST['contact'], $_REQUEST['present_address'], $_REQUEST['gender'], $_REQUEST['nid'], $_REQUEST['email']))
	{
		$name=trim($_REQUEST['name']);
		$f_name=trim($_REQUEST['f_name']);
		$m_name=trim($_REQUEST['m_name']);
		$gender_id=trim($_REQUEST['gender']);
		$myDate=trim($_REQUEST['myDate']);
		$permanent_address=trim($_REQUEST['permanent_address']);
		$present_address=trim($_REQUEST['present_address']);
		$contact=trim($_REQUEST['contact']);
		$nid=trim($_REQUEST['nid']);
		$email=trim($_REQUEST['email']);

		//echo "i am here....";
		//echo $name. " " . $gender_id;

		if($gender_id == 0)
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

			if($gender_id == "1") $gender = "Male";
			else if($gender_id == "2") $gender = "Female";
			else if($gender_id == "3") $gender = "Other";

			$cnt=0;

			$contact = "+880".$contact;

			//echo $name. " ". $designation . " " . $myDate . " " . $address. " " . $contact. " " . $username. " " . $c_password;
		
			$qry = "INSERT INTO customer (national_id, customer_name, father_name, mother_name, dob, gender, email, permanent_address, present_address, contact) VALUES ('$nid', '$name', '$f_name', '$m_name', '$myDate', '$gender', '$email', '$permanent_address', '$present_address', '$contact' )";

			$result = mysql_query($qry);
			//echo var_dump($result);
			
			if($result)
			{
				session_start();
				$_SESSION['national_id'] = $nid; 
				//$_SESSION['c_password'] = $c_password;
				//$_SESSION['name'] = $name;
				session_write_close();
				echo "ok";
				//echo "Customer information is added";
			}

			else
			{
				?>
				
				<p class="w3-center w3-text-white w3-red w3-text-large" style="margin-top: 25px; font-family: Arial;">
					<?php 
					echo "This NID is already added";
					?>
				</p> 
	 		
	 		<?php

			}
		}
	}

?>