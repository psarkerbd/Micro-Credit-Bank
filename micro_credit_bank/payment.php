<?php include("include/header_demand.php"); ?>
<?php include("include/config.php"); ?>

<div class="w3-container w3-border" style="min-height:295px;height:auto;">
	
	<div class="w3-container w3-middle w3-border w3-card-4" style="max-width:600px;width:100%;margin-top:20px;margin-bottom: 20px;background-color: #d9d9d9; color: black; font-family: sans-serif;text-align: center;">

		<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
			
			<div class="w3-col w3-right-align w3-padding" style="width:30%;">
				<label for="fname">NID: </label>
			</div>
				
			<div class="w3-green w3-col w3-left-align" style="width:70%; position: relative;">
				<input class="w3-input w3-border" type="text" id="nid" style="border: 2px solid red;" required />
			</div>
				
		</div>

		<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
		
			<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
				<label for="fname">Loan type: </label>
			</div>
				
			<div class="w3-col w3-left-align w3-dropdown-hover"  style="width:70%;">
					<!--<input class="w3-input w3-border" method = "post" type="text" id="designation" placeholder="Employee designation..." required/> -->
				<select class="w3-input w3-border" id="loan_type" required>
						
						<?php 
							
							$sql = "SELECT * FROM loan_category";
							$result = mysql_query($sql);
							if($result)
							{
								$cnt_table = mysql_num_rows($result);
								echo "cnt_table = " . $cnt_table;
							?>
								
							<option value="" > <?php echo "Select"; ?> </option>
								
					<?php		if($cnt_table > 0)
								{
									while($row = mysql_fetch_assoc($result))
									{?>
										<option value="<?php echo $row['category_id']; ?>" > <?php echo $row['loan_type']; ?> </option>
							<?php			
									}
								}
							}
							

							?>
							  
					</select>
			</div>
			
		</div>
		
		<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">

			<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
				<label for="fname">Loan Amount:</label>
			</div>
				
			<div class="w3-col w3-left-align w3-border"  style="width:70%;">
					<!-- <input class="w3-input w3-border" method = "post" type="text" id="appointment_date" placeholder="Employee appoint date..." required/> -->
				<input class="w3-input w3-border" type="text" id="loan_amount" style="border: 2px solid red;" required />
			</div>
			
		</div>
			
		<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">

			<div class="w3-col w3-right-align w3-padding"  style="width:30%;">
				<label for="fname">Loan Date:</label>
			</div>
				
			<div class="w3-col w3-left-align w3-border"  style="width:70%;">
					<!-- <input class="w3-input w3-border" method = "post" type="text" id="appointment_date" placeholder="Employee appoint date..." required/> -->
				<input class="w3-input w3-border" type="date" id="myDate" required />
			</div>
			
		</div>

		<br/>
					
					
			<!-- end password -->

		<div class="w3-row w3-margin-bottom" style="width:100%;max-width:600px;">
			<button class="w3-button w3-green w3-round w3-right" id="submit_btn" onclick="get_submit()"> Submit </button>
		</div>
		
<script>

	function myFunction() 
	{
	    document.getElementById("myDate").value = "";
	}
			
	function get_submit()
	{
		var national_id   = document.getElementById('nid').value;
		var loan_type     = document.getElementById('loan_type').value;
		var loan_amount   = document.getElementById('loan_amount').value;
		var loan_date     = document.getElementById('myDate').value;
		
		//console.log(national_id);
		//console.log(loan_type);
		//console.log(loan_date);
		//console.log(loan_status);
				
		if(national_id!="" && loan_type!="" && loan_date!="" && loan_amount!="")
		{
			//console.log(national_id);
			//console.log(loan_type);
			//console.log(loan_date);
			//console.log(loan_status);
			
			document.getElementById('submit_btn').innerHTML='Submitting...';
					
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					var msg=this.responseText.trim();
					//console.log("."+msg+".");
					if(msg=="ok")
					{
						document.getElementById('mmssgg').style.display='none';
						document.getElementById('submit_btn').innerHTML='Submit';
						//console.log("Logged IN");
						//console.log(this.responseText);
						window.location.href = "payment_detail.php";
					}
					else
					{
						document.getElementById('mmssgg').style.display='block';
						document.getElementById('mmssgg').innerHTML=msg;
						document.getElementById('submit_btn').innerHTML='submit';
					}
				}
			};
		
			xhttp.open("GET", "payment_exec.php?national_id="+national_id+"&loan_type="+loan_type+"&loan_date="+loan_date+"&loan_amount="+loan_amount, true);
			xhttp.send(); 
		}
		
		else
		{
			window.alert("Please fill up the form correctly");
		}
	}
			
</script>
		
		<p class="w3-center w3-text-red w3-panel" id="mmssgg" style="display:none;"></p>
				
	</div>

</div>

<?php include("include/footer_demand.php"); ?>