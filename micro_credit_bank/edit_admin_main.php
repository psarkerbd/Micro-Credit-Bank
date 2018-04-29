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
				<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
					<label for="fname">Designation: </label>
				</div>
				
				<div class="w3-col w3-left-align w3-dropdown-hover"  style="width:70%;">
					<!--<input class="w3-input w3-border" method = "post" type="text" id="designation" placeholder="Employee designation..." required/> -->
					<select class="w3-input w3-border" id="designation">
						<?php 

							for ($i=0; $i<6; $i++)
							{
	
							    if($i==0) $str = "None";
							    else if($i==1) $str="Chairman";
							    else if($i==2) $str="Director";
							    else if($i==3) $str="Manager";
							    else if($i==4) $str="Administrator";
							    else if($i==5) $str="Treasurer";

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
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname">Address: </label>
				</div>
				
				<div class="w3-green w3-col w3-left-align" style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="address" placeholder="Your address..."/>
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
						<label for="fname">Password: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="password" id="password" placeholder="Your password..." />
					</div>
				
				</div>

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
					<div class="w3-col w3-left-align" style="width:30%; margin: 8px 0px 0px 0px; text-align: center;">
						<label for="fname" style="margin-left: 27px">Confirm Password: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="password" id="c_password" placeholder="Confirmed password..."/>
					</div>
				
				</div>

			<br/>
					
					
					<!-- end password -->

			<div class="w3-row w3-margin-bottom" style="width:100%;max-width:600px;">
				<button class="w3-button w3-green w3-round w3-right" id="update_btn" onclick="get_login()">Update</button>
			</div>

		</form>
				
	</div>

</div>

<script>

	//document.getElementById("addplace").innerHTML = "+880 ";

	function get_login()
	{
		//var name=document.getElementById('name').value;
		var designation=document.getElementById('designation').value;
		//var address = "";
		var address=document.getElementById('address').value;
		//var contact = "";
		var contact=document.getElementById('contact').value;
		//var username = "";
		//var username=document.getElementById('username').value;
		//var password = "";
		var password=document.getElementById('password').value;
		//var c_password="";
		var c_password=document.getElementById('c_password').value;
		//var date = "";
		//var date=document.getElementById('myDate').value;

		//console.log(date);

		//console.log(contact);
				
		if((designation!="" || designation=="") || (address!="" || address=="") || (contact!="" || contact=="") || (password!="" || password=="") || (c_password!="" || c_password==""))
		{
				document.getElementById('update_btn').innerHTML='Updating...';

				//console.log("kaj korse");
					
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200) 
					{
						var msg=this.responseText.trim();
						//var m=this.responseText.trim();
						//console.log("."+msg+".");
						if(msg=="ok") //logged in successfully
						{
							document.getElementById('mmssgg').style.display='none';
							document.getElementById('update_btn').innerHTML='Update';
							document.getElementById('confirm_msg').style.display='block';
							document.getElementById('confirm_msg').innerHTML= msg;
							//console.log("Logged IN");
							window.location.href = "home.php";
							reset();
						}
						
						else
						{
							document.getElementById('mmssgg').style.display='block';
							document.getElementById('mmssgg').innerHTML=msg;
							document.getElementById('update_btn').innerHTML='Update';
						}

					}
				};
		
			xhttp.open("GET", "edit_admin_main_exec.php?designation="+designation+"&address="+address+"&contact="+contact+"&c_password="+c_password, true);
			xhttp.send();
		}
}

</script>
<p class="w3-center w3-text-red" id="mmssgg" style="display : none;"></p>
<p class="w3-center w3-green" id="confirm_msg" style="display: none"></p>


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