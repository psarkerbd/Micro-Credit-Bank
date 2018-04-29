<?php include("include/header_demand.php"); ?>
<?php include("include/config.php"); ?>

<div class="w3-container w3-border" style="min-height:295px;height:auto;">
	
	<div class="w3-container w3-middle w3-border w3-card-4" style="max-width:600px;width:100%;margin-top:20px;margin-bottom: 20px;background-color: #d9d9d9; color: black; font-family: sans-serif;text-align: center;">

		<div class="w3-row w3-margin-top" style="max-width:600px;width:100%;">
			
			<div class="w3-col w3-right-align w3-padding" style="width:30%;">
				<label for="fname">NID: </label>
			</div>
				
			<div class="w3-green w3-col w3-left-align" style="width:70%; position: relative;">
				<input class="w3-input w3-border" type="text" id="nid" style="border: 2px solid red;" placeholder="e.g., 1400" required />
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
				<input class="w3-input w3-border" type="text" id="loan_amount" style="border: 2px solid red;" placeholder="e.g., 100" required />
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
			<button class="w3-button w3-green w3-round w3-right" id="submit_btn" onclick="check_validation()"> Submit </button>
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
		
		//console.log("submit function");
				
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
	
	function check_date(date)
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
			var diff = yyyy - newDateyyyy;
			
			if(diff == 0 || diff == 1)
			{
				return true;
			}
			
			else
			{
				return false;
			}
		}
		
		else
		{
			return false;
		}
	}
	
	function check_validation()
	{
		var national_id   = document.getElementById('nid').value;
		var loan_type     = document.getElementById('loan_type').value;
		var loan_amount   = document.getElementById('loan_amount').value;
		var loan_date     = document.getElementById('myDate').value;
		
		//console.log("validation  " + contact);
		
		var national_idFlag = 0 , loan_amountFlag = 0 , loan_dateFlag = 0;
		
		var allletters = /^[A-Za-z]+$/ ;
		var alphaspace = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/
		var alphanumeric = /^[0-9a-zA-Z]+$/ ;
		var allnumeric = /^[0-9]+$/;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		
		if(national_id.match(allnumeric))
		{
			national_idFlag = 1;
			//console.log("national_id true");
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="National ID contain only numeric values";
		}
		
		if(loan_amount.match(allnumeric))
		{
			loan_amountFlag = 1;
			//console.log("loan_amount true");
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Amount contain numeric value";
		}
		
		if(check_date(loan_date))
		{
			loan_dateFlag = 1;
			//console.log("loan date true");
		}
		
		else
		{
			document.getElementById('mmssgg').style.display='block';
			document.getElementById('mmssgg').innerHTML="Inavalid Date. Loan validity 1 year for now";
		}
		
		if(national_idFlag==1 && loan_amountFlag==1 && loan_dateFlag==1)
		{
			get_submit();
		}
		
		else
		{
			console.log("may be not correct");
		}
	}
			
</script>
		
		<p class="w3-center w3-red w3-panel w3-row-padding w3-margin-top" id="mmssgg" style="display:none; font-family: Arial"></p>
				
	</div>

</div>

<?php include("include/footer_demand.php"); ?>