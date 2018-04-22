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
					<input class="w3-input w3-border" method = "post" type="text" id="name" placeholder="Customer name..." required/>
				</div>
			
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname"> Father's Name: </label>
				</div>
				
				<div class="w3-col w3-left-align"  style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="f_name" placeholder="Father's name..." required/>
				</div>
			
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname">Mother's Name: </label>
				</div>
				
				<div class="w3-col w3-left-align"  style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="m_name" placeholder="Mother's name..." required/>
				</div>
			
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
					<label for="fname"> Gender: </label>
				</div>
				
				<div class="w3-col w3-left-align w3-dropdown-hover"  style="width:70%;">
					<!--<input class="w3-input w3-border" method = "post" type="text" id="designation" placeholder="Employee designation..." required/> -->
					<select class="w3-input w3-border" id="gender">
						<?php 

							for ($i=0; $i<4; $i++)
							{
	
							    if($i==0) $str = "None";
							    else if($i==1) $str="Male";
							    else if($i==2) $str="Female";
							    else if($i==3) $str="Other";
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
					<label for="fname">Date of Birth:</label>
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
					<label for="fname"> Permanent Address: </label>
				</div>
				
				<div class="w3-green w3-col w3-left-align" style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="permanent_address" placeholder="Permanent address..." required/>
				</div>
				
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname"> Present Address: </label>
				</div>
				
				<div class="w3-green w3-col w3-left-align" style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="present_address" placeholder="Present address..." required/>
				</div>
				
			</div>

			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
				<div class="w3-col w3-right-align w3-padding" style="width:30%;">
					<label for="fname"> Email: </label>
				</div>
				
				<div class="w3-green w3-col w3-left-align" style="width:70%;">
					<input class="w3-input w3-border" method = "post" type="text" id="email" placeholder="Email..." required/>
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
						<label for="fname"> NID: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="text" id="nid" placeholder="Your NID..." required/>
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
		var f_name=document.getElementById('f_name').value;
		var m_name=document.getElementById('m_name').value;
		var myDate=document.getElementById('myDate').value;
		var gender=document.getElementById('gender').value;
		var contact=document.getElementById('contact').value;
		var permanent_address=document.getElementById('permanent_address').value;
		var present_address=document.getElementById('present_address').value;
		var email=document.getElementById('email').value;
		var nid=document.getElementById('nid').value;

		//console.log(myDate);
				
		if(name!="" && f_name!="" && m_name!="" && contact!="" && gender!="" && permanent_address!="" && present_address!="" && myDate !="" && nid!="")
		{
				document.getElementById('submit_btn').innerHTML='Submitting...';
					
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
						var msg=this.responseText.trim();
						//var m=this.responseText.trim();
						console.log(msg);

						if(msg=="ok") //logged in successfully
						{
							//console.log("if working");
							//console.log("  log = ok");
							document.getElementById('mmssgg').style.display='none';
							document.getElementById('submit_btn').innerHTML='Submit';
								//console.log("Logged IN");
							window.location.href = "customer_detail.php";
							//reset();
						}
						
						else
						{
							//console.log("else working");
							document.getElementById('mmssgg').style.display='block';
							document.getElementById('mmssgg').innerHTML=msg;
							document.getElementById('submit_btn').innerHTML='Submit';
						}

				}
			};

			//xhttp.open("GET", "submit_exec.php?username="+username+"&c_password="+c_password+"&contact="+contact+"&name="+name+"&designation="+designation+"&myDate="+date+"&address="+address, true);
		
			xhttp.open("GET", "customer_application_exec.php?name="+name+"&f_name="+f_name+"&m_name="+m_name+"&myDate="+myDate+"&gender="+gender+"&permanent_address="+permanent_address+"&email="+email+"&contact="+contact+"&present_address="+present_address+"&nid="+nid, true);
			xhttp.send();
		}
}

</script>

<p class="w3-center w3-text-red" id="mmssgg" style="display:none;"></p>
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