<?php include("include/header_demand.php"); ?>
<?php include("include/config.php"); ?>

<?php 

	$designation = $_SESSION['designation'];
	$username    = $_SESSION['username'];
?>

<div class="w3-container w3-border" style="min-height:295px;height:auto;">
	
		<div class="w3-container w3-middle w3-border w3-card-4" style="max-width:600px;width:100%;margin-top:20px;margin-bottom: 20px;background-color: #d9d9d9; color: black; font-family: sans-serif;text-align: center;">

		
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
						<input class="w3-input w3-border" method = "post" type="text" id="designation"  value="<?php echo $designation; ?>" disabled />
					</div>
				
				</div>

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
					<div class="w3-col w3-right-align w3-padding" style="width:30%;">
						<label for="fname"> Address: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="text" id="address" placeholder="Your address..." required/>
					</div>
					
				</div>

				<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
					<div class="w3-col w3-right-align w3-padding" style="width:30%;">
						<label for="fname"> Contact: </label>
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
						

				<div class="w3-row w3-margin-bottom" style="width:100%;max-width:600px;">
					<button class="w3-button w3-green w3-round w3-right" id="update_btn" onclick="check_validation()">Update</button>
				</div>
		
</div>
	
	
<script>

	function myFunction() 
	{
	    document.getElementById("myDate").value = "";
	}

	//document.getElementById("addplace").innerHTML = "+880 ";

	function get_update()
	{
		var name        = document.getElementById('name').value;
		var designation = document.getElementById('designation').value;
		var address     = document.getElementById('address').value;
		var contact     = document.getElementById('contact').value;
		var password    = document.getElementById('password').value;
		var c_password  = document.getElementById('c_password').value;
		var username    = "<?php echo $username ?>";
		
		console.log(name);
		console.log(designation);
		console.log(contact);
				
		if(name!="" && designation!="" && address!="" && contact!="" && password!="" && c_password!="" && password == c_password)
		{
				//document.getElementById('update_btn').innerHTML='Updating...';
				
				console.log("if condition satisfy");
					
				var xhttp = new XMLHttpRequest();
				
				xhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200) 
					{
							var msg=this.responseText.trim();
							//var m=this.responseText.trim();
							//console.log("."+msg+".");
							console.log(msg);
							if(msg=="ok") //logged in successfully
							{
								//console.log(" if working ");
								document.getElementById('mmssgg').style.display='none';
								document.getElementById('update_btn').innerHTML='Update';
								//console.log("Logged IN");
								window.location.href = "admin_detail.php";
							}
							else
							{
								console.log(" else working ");
								document.getElementById('mmssgg').style.display='block';
								document.getElementById('mmssgg').innerHTML=msg;
								document.getElementById('update_btn').innerHTML='Update';
							}

					}
			    };
		
			xhttp.open("GET", "edit_profile_exec.php?name="+name+"&c_password="+c_password+"&contact="+contact+
			"&designation="+designation+"&address="+address+"&username="+username, true);
			xhttp.send();
		}

		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Password does not matched";
			//document.getElementById('update_btn').innerHTML='Update';
		}
	}
	
	function check_date()
	{
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();

		if(dd < 10) 
		{
			dd = '0'+dd;
		} 

		if(mm < 10) {
			mm = '0'+mm;
		} 

		//today = mm + '/' + dd + '/' + yyyy;
		//document.write(today);
		//return today;
		//console.log(date);
		newDate = date.split('-');
		//console.log(newDate);
		newDateyyyy = newDate[0];
		newDatemm   = newDate[1];
		newDatedd   = newDate[2];
		
		if(yyyy >= newDateyyyy && mm >= newDatemm && dd >= newDatedd)
		{
			return true;
		}
		
		else
		{
			return false;
		}
	}
	
	function check_validation()
	{
		var name        = document.getElementById('name').value;
		var designation = "<?php echo $designation; ?>" ;
		var address     = document.getElementById('address').value;
		var contact     = document.getElementById('contact').value;
		var password    = document.getElementById('password').value;
		var c_password  = document.getElementById('c_password').value;
		
		contact = "0" + contact;
		
		console.log("validation  " + contact);
		
		var nameFlag = 0 , addressFlag = 0 , contactFlag = 0, passwaordFlag = 0 , c_passwordFlag = 0 , matchFlag = 0;
		
		var allletters = /^[A-Za-z]+$/ ;
		var alphaspace = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/
		var alphanumeric = /^[0-9a-zA-Z]+$/ ;
		var allnumeric = /^[0-9]+$/;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		
		if(name.match(alphaspace))
		{
			nameFlag = 1;
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Name contain only letters";
		}
		
		if(address.match(alphaspace) || address.match(alphanumeric) || address.match(allletters))
		{
			addressFlag = 1;
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Address contain only letters or number";
		}
		
		if(contact.match(allnumeric) && contact.length == 11)
		{
			contactFlag = 1;
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Contact number 11 digits numeric number";
		}
		
		if(password == c_password)
		{
			matchFlag = 1;
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Passwords did not match";
		}
		
		if(nameFlag==1 && addressFlag==1 && contactFlag==1 && matchFlag==1)
		{
			//console.log("Al right");
			get_update();
		}
		
		else
		{
			console.log("not correct");
		}
	}

</script>

<p class="w3-center w3-red w3-text-white" id="mmssgg" style="display:none; font-family: Arial;"></p>
<p class="w3-center w3-green" id="confirm_msg" style="display: none"></p>


</div>


<?php include("include/footer.php"); ?>