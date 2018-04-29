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




<body class="w3-row w3-row-padding" onload = startTime()>
	
<div class="w3-image w3-container w3-row w3-row-padding" style="border: height: auto; width: auto;">
	

		<div class="w3-half w3-container w3-row-padding ">

		<div class="w3-css-image-container" style="width: 100%">
		  <img src="images/krishi_loan.jpg" alt="krishi_loan" class="w3-css-image-image" style="width:650px; height:350px;">

		  <div class="w3-css-image-middle">
		   	 <div class="w3-css-image-text"><a href="crop_loan.php" style="text-decoration: none;">কৃষি ঋণ</a></div>
		  </div>

		</div>

		<div class="w3-css-image-container" style="width: 100%">
		  <img src="images/khamar_loan.jpg" alt="khamar_loan" class="w3-css-image-image" style="width:650px; height:350px;">

		  <div class="w3-css-image-middle">
		   	 <div class="w3-css-image-text"><a href="farm_loan.php" style="text-decoration: none;"> খামার প্রকল্প </a></div>
		  </div>

		</div>

	</div>

	<div class="w3-half w3-clear">

		<div class="w3-css-image-container" style="width: 100%">
		  <img src="images/fishery_loan.jpg" alt="fishery_loan" class="w3-css-image-image" style="width:650px; height:350px;">

		  <div class="w3-css-image-middle">
		   	 <div class="w3-css-image-text"><a href="fisheries_loan.php" style="text-decoration: none;"> মৎস্য প্রকল্প </a> </div>
		  </div>

		</div>

		<div class="w3-css-image-container" style="width: 100%">
		  <img src="images/shilpo_loan.jpg" alt="shilpo_loan" class="w3-css-image-image" style="width:650px; height:350px;">

		  <div class="w3-css-image-middle">
		   	 <div class="w3-css-image-text"> <a href="handcraft_loan.php" style="text-decoration: none;">কুটির শিল্প প্রকল্প </a></div>
		  </div>

		</div>

	</div>

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
	