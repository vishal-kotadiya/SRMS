<?php
	session_start();
	if (!(isset($_COOKIE["chkuser"])))
	{
		header("Location: login.php");
		die("First Login to access this service");
	}
	//echo "<br>Welcome ".$_SESSION["ans"];

?>