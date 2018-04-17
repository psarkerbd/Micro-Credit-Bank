<?php include("include/header_admin.php"); ?>
<?php include("include/config.php"); ?>

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
								window.location.href = "edit_admin_main.php";
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