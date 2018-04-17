

<?php

	if($_SERVER['REQUEST_METHOD'] == "post")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password))
		{
			$errormsg = "username or pass "
		}
	}

?>