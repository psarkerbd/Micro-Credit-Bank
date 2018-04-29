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

<div class="w3-container w3-border" style="min-height:295px;height:auto;">
	
		<div class="w3-container w3-middle w3-border w3-card-4" style="max-width:600px;width:100%;margin-top:20px;margin-bottom: 20px;background-color: #d9d9d9; color: black; font-family: sans-serif;text-align: center;">

		<form action="#">
			
			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname">Name: </label>
				</div>
				
				<div class="w3-col w3-left-align"  style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="name" placeholder="Employee name..." required/>
				</div>
			
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
					<label for="fname">Designation: </label>
				</div>
				
				<div class="w3-col w3-left-align w3-dropdown-hover"  style="width:70%;">
					<!--<input class="w3-input w3-border" method = "post" type="text" id="designation" placeholder="Employee designation..." required/> -->
					<select class="w3-input w3-border" id="designation">
						<?php 

							for ($i=0; $i<7; $i++)
							{
	
							    if($i==0) $str = "None";
							    else if($i==1) $str="Chairman";
							    else if($i==2) $str="Manager";
							    else if($i==3) $str="Assistant Manager";
							    else if($i==4) $str="Area Manager";
							    else if($i==5) $str="Cash Officer";
							    else if($i==6) $str="Public Relationship Officer";

							?>
							 <option value="<?php echo $i; ?>" > <?php echo $str; ?> </option>
							  
						<?php

							} 
						?>
					</select>
				</div>
			
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
					<label for="fname">Appointment:</label>
				</div>
				
				<div class="w3-col w3-left-align w3-border"  style="width:70%;">
					<!-- <input class="w3-input w3-border" method = "post" type="text" id="appointment_date" placeholder="Employee appoint date..." required/> -->
					<input class="w3-input w3-border" type="date" id="myDate" required />
				</div>
			
			</div>

					<!-- end username -->

					<!-- start password -->

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname">Address: </label>
				</div>
				
				<div class="w3-green w3-col w3-left-align" style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="address" placeholder="Your address..." required/>
				</div>
				
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname">Contact: </label>
				</div>
				
				<div class="w3-green w3-col w3-left-align" style="width:70%; position: relative;">
					<input class="w3-input w3-border" method = "post" type="text" id="contact" style="border: 2px solid red; padding-left: 50px;"/>
					<label style="position:absolute; left:10px; top:9px; color:black"> +880 </label>
				</div>
				
			</div>

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
					<div class="w3-col w3-right-align w3-padding" style="width:30%;">
						<label for="fname">Username: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="text" id="username" placeholder="Your Unique username..." required/>
					</div>
				
				</div>

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
					<div class="w3-col w3-right-align w3-padding" style="width:30%;">
						<label for="fname">Password: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="password" id="password" placeholder="Your password..." required/>
					</div>
				
				</div>

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
					<div class="w3-col w3-left-align" style="width:30%; margin: 8px 0px 0px 0px; text-align: center;">
						<label for="fname" style="margin-left: 27px">Confirm Password: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="password" id="c_password" placeholder="Confirmed password..." required/>
					</div>
				
				</div>

			<br/>
					
					
					<!-- end password -->

			<div class="w3-row w3-margin-bottom" style="width:100%;max-width:600px;">
				<button class="w3-button w3-green w3-round w3-right" id="submit_btn" onclick="get_submit()">Submit</button>
			</div>

		</form>
				
	</div>
	
	
<script>

	function myFunction() 
	{
	    document.getElementById("myDate").value = "";
	}

	//document.getElementById("addplace").innerHTML = "+880 ";

	function get_submit()
	{
		var name=document.getElementById('name').value;
		var designation=document.getElementById('designation').value;
		//var address = "";
		var address=document.getElementById('address').value;
		//var contact = "";
		var contact=document.getElementById('contact').value;
		//var username = "";
		var username=document.getElementById('username').value;
		//var password = "";
		var password=document.getElementById('password').value;
		//var c_password="";
		var c_password=document.getElementById('c_password').value;
		//var date = "";
		var date=document.getElementById('myDate').value;

		//console.log(date);
				
		if(name!="" && designation!="" && address!="" && contact!="" && username!="" && password!="" && c_password!="" && date !="" && password == c_password)
		{
				document.getElementById('submit_btn').innerHTML='Submitting...';
					
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
						var msg=this.responseText.trim();
						//var m=this.responseText.trim();
						//console.log("."+msg+".");
						//console.log(msg);
						if(msg=="ok") //logged in successfully
						{
							//console.log(" if working ");
							document.getElementById('mmssgg').style.display='none';
							document.getElementById('submit_btn').innerHTML='Submit';
							//console.log("Logged IN");
							window.location.href = "admin_detail.php.php";
						}
						else
						{
							//console.log(" else working ");
							document.getElementById('mmssgg').style.display='block';
							document.getElementById('mmssgg').innerHTML=msg;
							document.getElementById('submit_btn').innerHTML='Submit';
						}

				}
			};
		
			xhttp.open("GET", "submit_exec.php?username="+username+"&c_password="+c_password+"&contact="+contact+"&name="+name+"&designation="+designation+"&myDate="+date+"&address="+address, true);
			xhttp.send();
		}

		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Password does not matched";
			document.getElementById('submit_btn').innerHTML='Submit';
		}
}

</script>
<p class="w3-center w3-red w3-text-white" id="mmssgg" style="display:none; font-family: Arial;"></p>
<p class="w3-center w3-green" id="confirm_msg" style="display: none"></p>


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