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
		//console.log(customer_nid);
				
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
						
						window.location.href = "payment_search_result.php?customer_nid="+customer_nid;
					}
					
					else if(msg=="error1")
					{
						document.getElementById('mmssgg').style.display='block';
						document.getElementById('mmssgg').innerHTML="Register as Customer first";
						document.getElementById('search_btn').innerHTML='Search';
					}
					
					else
					{
						document.getElementById('mmssgg').style.display='block';
						document.getElementById('mmssgg').innerHTML=msg;
						document.getElementById('search_btn').innerHTML='Search';
						//window.location.href = "payment_search.php";
					}
				}
			};
			xhttp.open("GET", "payment_search_exec.php?customer_nid="+customer_nid, true);
			xhttp.send(); 
		}
	}

</script>


	<p class="w3-center w3-red w3-panel w3-row-padding w3-margin-top" id="mmssgg" style="display:none; font-family: Arial;"></p>

</div>


<?php include("include/footer_demand.php"); ?>