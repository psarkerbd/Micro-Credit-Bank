<div class="w3-container" style="padding:0px;margin:0px;">

		<!-- this div contains an mcb logo and a text -->
		
	<div class="w3-row-padding w3-border" style="background-color: lightgray;">
			
			<!-- inserting the logo -->

		<div class="w3-col w3-container m2 l2">
			<a href="index.php">
				<img alt="mcb_logo" src="images/mcb_logo.jpg" width="100px" height="100px"/>
			</a>
		</div>

	<div class="w3-col w3-container m9 l9" style="font-family: sans-serif;">  
		<p class="w3-large">Micro Credit Bank</p>
		<p class="w3-medium"> Micro Credit Bank(MCB) is the community development Bank in Bangladesh.</p>
	</div>
	
	</div>

	<div class="w3-row-padding w3-border w3-black">
		<div class="w3-row-padding w3-bar">

			<div class="w3-row w3-small">
				
				<a href="home.php" class="w3-bar-item w3-button">Home</a>
				<a href="#" class="w3-bar-item w3-button">Customer Details</a>
				<a href="#" class="w3-bar-item w3-button">Loan Details</a>
				<a href="#" class="w3-bar-item w3-button">Customer Application</a>
				<a href="#" class="w3-bar-item w3-button">Loan Application</a>

			</div>

			<div class="w3-row-padding w3-col w3-container m5 l5" style="font-family: sans-serif; color: green">  
				<p class="w3-tiny w3-row-padding">Micro Credit Bank. ALL RIGHTS DESERVED</p>
		  	</div>


			<div class="w3-row-padding w3-col w3-container m7 l7" style="font-family: sans-serif; color: white">  
				<p class="w3-small w3-right" id="liveTime"></p>
		  	</div>


			<h6 class="w3-panel w3-tiny" style="color: white; font-family: sans-serif;"> Web Design and Developed by: TNP</h6>	
	
		</div>

	</div>

</div>


	<script>
	

		function startTime() {
			
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			
			var meridian, tt;
			
			if(h >=0 && h <= 11)
			{
				meridian = "AM";
			}
			
			if(h >= 12 && h <= 23)
			{
				meridian = "PM";
			}
			
			if(h <= 12)
			{
				tt = h;
			}
			
			else
			{
				tt = h - 12;
			}
			
			if(tt == 0)
			{
				tt = 12;
			}
			
			if(tt < 10)
			{
				tt = "0" + tt;
			}
			
			var totalTime = tt + ":" + m + ":" + s + " " + meridian;
			
			document.getElementById('liveTime').innerHTML = totalTime;
			
			var t = setTimeout(startTime, 500);
		
		}
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
		}
	</script>
</body>

</html>