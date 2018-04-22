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