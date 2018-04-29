<?php 
	include("include/config.php");
	include("include/header_demand.php");
	
	$national_id = $_REQUEST['national_id'];
	//echo $national_id;
?>


<div class="w3-container w3-border" style="min-height:295px;height:auto;">
	
		<div class="w3-container w3-middle w3-border w3-card-4" style="max-width:600px;width:100%;margin-top:20px;margin-bottom: 20px;background-color: #d9d9d9; color: black; font-family: sans-serif;text-align: center;">


			<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
						<!-- start username -->
					<div class="w3-col w3-right-align w3-padding" style="width:30%;">
						<label for="fname"> NID: </label>
					</div>
					
					<div class="w3-green w3-col w3-left-align" style="width:70%;">
						<input class="w3-input w3-border" method = "post" type="text" id="nid" value="<?php echo $national_id; ?>" disabled/>
					</div>
				
			</div>

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

			<br/>
					
					
					<!-- end password -->

			<div class="w3-row w3-margin-bottom" style="width:100%;max-width:600px;">
				<button class="w3-button w3-green w3-round w3-right" id="update_btn" onclick="get_update()">Update</button>
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
		var contact=document.getElementById('contact').value;
		var permanent_address=document.getElementById('permanent_address').value;
		var present_address=document.getElementById('present_address').value;
		var email=document.getElementById('email').value;
		var nid = document.getElementById('nid').value;

		console.log(nid);
				
		if(contact!="" && permanent_address!="" && present_address!="" && nid!="")
		{
				document.getElementById('update_btn').innerHTML='Updating...';
					
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
							document.getElementById('update_btn').innerHTML='Update';
								//console.log("Logged IN");
							window.location.href = "pro_customer_detail.php";
							//reset();
						}
						
						else
						{
							//console.log("else working");
							document.getElementById('mmssgg').style.display='block';
							document.getElementById('mmssgg').innerHTML=msg;
							document.getElementById('update_btn').innerHTML='Update';
						}

				}
			};

			//xhttp.open("GET", "submit_exec.php?username="+username+"&c_password="+c_password+"&contact="+contact+"&name="+name+"&designation="+designation+"&myDate="+date+"&address="+address, true);
		
			xhttp.open("GET", "pro_customer_update_exec.php?national_id="+nid+"&permanent_address="+permanent_address+"&present_address="+present_address+"&contact="+contact+"&email="+email, true);
			xhttp.send();
		}
		
		else
		{
			window.alert("Fill up the form perfectly");
		}
}

</script>

<p class="w3-center w3-text-red" id="mmssgg" style="display:none;"></p>
<p class="w3-center w3-green" id="confirm_msg" style="display: none"></p>

</div>



<?php include("include/footer_demand.php"); ?>