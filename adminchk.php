<?php
	include "connection.php";
	
	session_start();
	$uname=$_POST["txtid"];
	$upass=$_POST["password"];
	/*if ($_SESSION["ans"]!=$_POST["txtans"])
	{
		$msg="Incorrect Expression Answer";
		header("Location: new.php?err=$msg");
		die();
	}*/
	$qry="select * from admin order by admin_id";
	$rs=mysqli_query($conn,$qry);
	$rec=mysqli_fetch_assoc($rs);
	
	if (($uname==$rec["admin_id"]) && ($upass==$rec["password"]))
	{
		setcookie("chkuser","1");
		setcookie("location","anand",time()+7*24*3600);
		header("Location: DispRecordtab.php");
		$_SESSION["ans"]=$uname;
	}
	else
	{
		$msg="Incorrect Username and Password";
		header("Location: login.php?err=$msg");
	}	
?>