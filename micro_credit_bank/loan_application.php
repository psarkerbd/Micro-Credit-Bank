<?php include("include/config.php"); ?>
<?php include("include/header_demand.php"); ?>

<div class="w3-container" style="min-height:295px;height:auto;">
	
	<div class="w3-container w3-middle" style="max-width:600px;width:100%;margin-top:90px;">

		<form action="#">
			
			<div class="w3-row w3-middle" style="max-width:600px;width:100%;">

				<div class="w3-col w3-left-align w3-middle"  style="width:70%; margin-left: 80px;">
					<input class="w3-input w3-border" method = "post" type="text" id="customer_nid" placeholder="Give customer National ID..." required/>
					<button class="w3-button w3-margin-top w3-green w3-round w3-right" id="search_btn" onclick="get_search()">Search</button>
				</div>
          
			</div>

		</form>
	
	</div>

<script type="text/javascript">
	
	function get_search()
	{
		var customer_nid=document.getElementById('customer_nid').value;
		console.log(customer_nid);
				
		if(customer_nid != "")
		{
			document.getElementById('search_btn').innerHTML='Searching...';
					
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() 
			{
			
				if (this.readyState == 4 && this.status == 200) 
				{
					var msg=this.responseText.trim();
					//console.log("."+msg+".");
					if(msg=="ok")
					{
						//document.getElementById('mmssgg').style.display='none';
						//document.getElementById('search_btn').innerHTML='Search';
						//console.log("Logged IN");
						
						window.location.href = "loan_form.php?customer_nid="+customer_nid;
					}
					else
					{
						//document.getElementById('mmssgg').style.display='block';
						//document.getElementById('mmssgg').innerHTML=msg;
						//document.getElementById('search_btn').innerHTML='Search';
						window.location.href = "search_result.php?customer_nid="+customer_nid;
					}
				}
			};
		xhttp.open("GET", "loan_application_exec.php?customer_nid="+customer_nid, true);
		xhttp.send(); 
		}
	}

</script>


	<p class="w3-center w3-text-red" id="mmssgg" style="display:none;"></p>

</div>


<?php include("include/footer_demand.php"); ?>