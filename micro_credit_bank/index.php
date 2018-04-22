<?php include("include/config.php");?>
<?php include("include/header.php");?>
<?php
	session_start();
	//Logged In Test
	if(isset($_SESSION['username']) || isset($_SESSION['password']))
	{
		header("Location: home.php");
	}
?>

	<!-- Used for seperat header and container -->
	<div class="w3-clear"> </div>
	
	<div class="w3-cell-row w3-row">
	  		
		<div class="w3-row-padding w3-container">
			
			<!-- <h2 class="w3-large" style="font-family: sans-serif; ">Only for Board of Director members</h2> -->

			<marquee scrollamount="1" scrolldelay="1" behavior="ALTERNATE" width="100%" style="font-weight: normal; font-family: sans-serif; color: red; font-size: 20px">  
				Only for Bank members 
			</marquee>

		</div>

	</div>
		


	<div class="w3-container" style="min-height:295px;height:auto;">
	
		<div class="w3-container w3-middle" style="max-width:600px;width:100%;margin-top:50px;">

			<form action="#">
				<div class="w3-row" style="max-width:600px;width:100%;">
					<!-- start username -->
					<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
						<label for="fname">Username: </label>
					</div>

					<div class="w3-col w3-left-align"  style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="text" id="username" placeholder="Your username..." required/>
					</div>
          
				</div>

				<!-- end username -->

				<!-- start password -->

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
					<!-- start username -->
					<div class="w3-col w3-right-align w3-padding" style="width:30%;">
						<label for="fname">Password: </label>
					</div>
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="password" id="password" placeholder="Your password..." required/>
					</div>
				</div>

				<br/>
				
				
				<!-- end password -->

				<div class="w3-row" style="width:100%;max-width:600px;">
					<button class="w3-button w3-green w3-round w3-right" id="login_btn" onclick="get_login()">Log In</button>
				</div>

			</form>
			
<script>
			
			function get_login()
			{
				var username=document.getElementById('username').value;
				var password=document.getElementById('password').value;
				
				if(username!="" && password!="")
				{
					document.getElementById('login_btn').innerHTML='Logging In ...';
					
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							var msg=this.responseText.trim();
							//console.log("."+msg+".");
							if(msg=="ok") //logged in successfully
							{
								document.getElementById('mmssgg').style.display='none';
								document.getElementById('login_btn').innerHTML='Log In';
								//console.log("Logged IN");
								window.location.href = "home.php";
							}
							else
							{
								document.getElementById('mmssgg').style.display='block';
								document.getElementById('mmssgg').innerHTML=msg;
								document.getElementById('login_btn').innerHTML='Log In';
							}
						}
					};
					xhttp.open("GET", "login_exec.php?username="+username+"&password="+password, true);
					xhttp.send(); 
				}
			}
			
</script>
			<p class="w3-center w3-text-red" id="mmssgg" style="display:none;"></p>
		</div>
	</div>

<?php include("include/footer.php"); ?>