<?php include("include/config.php");?>

<?php 

	session_start();

	$username = $_REQUEST['username'];

	//echo $username;

	$qry = "DELETE from board_of_directors WHERE username='$username' ";
	$result = mysql_query($qry);

	if($result)
	{
		//echo "delete successfull";
		header("Location: remove_admin.php");
	}

	else
	{
		echo "not successfull";
	}

?>