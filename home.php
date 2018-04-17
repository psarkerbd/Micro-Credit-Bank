<?php include("include/config.php");?>
<?php include("include/header_admin.php");?>
<?php
	//Logged in page include
	session_start();
	if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
	{
		header("Location: index.php");
	}
	if(isset($_REQUEST['logout']))
	{
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		header("Location: index.php");
	}
	
	
?>

		</div>
	</div>
</div>




<body class="w3-container w3-margin" onload = startTime()>

	<div class="w3-container">
	
	<div class="w3-panel w3-border w3-border-red">

		<h1>Contents are coming...</h1>

	</div>

			 
<?php 
	include("include/footer.php"); 
?>
	