<!doctype html>
<html>
	<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta charset="UTF-8">
	  <title> Micro credit Bank </title>
	  <link rel="stylesheet" href="css/w3_css.css" >
	  <link rel="stylesheet" href="css/fontawesome-all.min.css">
	</head>

	<body class="w3-container" style="padding:0px;margin:0px;" onload = startTime()>
		
		<div class="w3-row-padding w3-border w3-green w3-cell-row ">
			
			<!-- inserting the logo -->

			<div class="w3-cell w3-col w3-container m2 l2">
		    	<a href="home.php"><img alt="mcb_logo" src="images/mcb_logo.jpg" width="180px" height="150px"/></a>
			</div>

			<div class="w3-cell w3-col w3-container m9 l9" style="font-family: sans-serif;">  
				<p style="font-weight: bold"><font size="6" color="white">মাইক্রো ক্রেডিট ব্যাংক লিমিটেড</font> <br/> 
		    	<font size="0" color="white"> যে ব্যাংক কৃষকের পাশে দাঁড়ায় </font> </p>

				<div class="w3-cell-row">
	  		
					<div class="w3-bar w3-green">
	  			
						<a href="home.php" class="w3-bar-item w3-button w3-wide w3-border w3-border-teal w3-round-large w3-margin-right"> Home </a>
						
						<div class="w3-dropdown-hover">
	             	
							<button class="w3-button w3-wide w3-border w3-border-teal w3-round-large w3-margin-right"> Admin </button>
							
							<div class="w3-dropdown-content w3-bar-block w3-card-4">
								<a href="add_admin.php" class="w3-bar-item w3-button w3-teal"> Add </a>
								<a href="edit_admin.php" class="w3-bar-item w3-button w3-teal"> Edit </a>
								<a href="remove_admin.php" class="w3-bar-item w3-button w3-teal"> Remove </a>
							</div>

						</div>

						<div class="w3-dropdown-hover">
	             	
							<button class="w3-button w3-wide w3-border w3-border-teal w3-round-large w3-margin-right"> Detail </button>
							
							<div class="w3-dropdown-content w3-bar-block w3-card-4">
								<a href="admin_detail.php" class="w3-bar-item w3-button w3-teal"> Admin </a>
								<a href="customer_detail.php" class="w3-bar-item w3-button w3-teal"> Customer </a>
								<a href="loan_detail.php" class="w3-bar-item w3-button w3-teal"> Loan </a>
								<a href="customer_loan_detail.php" class="w3-bar-item w3-button w3-teal"> Customer Loan </a>
							</div>

						</div>

						<div class="w3-dropdown-hover">
	             	
							<button class="w3-button w3-wide w3-border w3-border-teal w3-round-large w3-margin-right"> Apply </button>

							<div class="w3-dropdown-content w3-bar-block w3-card-4">
								<a href="customer_application.php" class="w3-bar-item w3-button w3-teal"> Customer </a>
								<a href="loan_application.php" class="w3-bar-item w3-button w3-teal"> Loan </a>
							</div>
	             	
						</div>


							<a href="#" class="w3-bar-item w3-button w3-wide w3-border w3-border-teal w3-round-large w3-margin-right" >  Request
							</a>

							<a href="home.php?logout=yes" class="w3-bar-item w3-button w3-wide w3-border w3-border-teal 				w3-round-large w3-margin-right" >  <label class="w3-tiny">  <?php echo $designation; ?> </label> Logout
							</a>

					</div>

				</div>
			</div>
		</div>