<?php
	include("include/config.php");
	if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
	{
		$username=trim($_REQUEST['username']);
		$password=trim($_REQUEST['password']);
		
		$qry = "SELECT * FROM board_of_directors WHERE username='$username' AND password='$password' ";
		$result = mysql_query($qry);
		if(mysql_num_rows($result) > 0)
		{
			session_start();
			$_SESSION['username'] = $username; 
			$_SESSION['password'] = $password; 
			session_write_close();
			echo "ok";

		}
		else
		{ ?>
			
			<p class="w3-panel w3-red" style="margin-top: 25px;">
				<?php 
				echo "You are not member of Board of Directors";
				?>
			</p> 
 		
 		<?php

		}
	}

?>