<?php
	include "connection.php";
	
	session_start();
	$uname=$_POST["txtnum"];
	$upass=$_POST["password"];
	/*if ($_SESSION["ans"]!=$_POST["txtans"])
	{
		$msg="Incorrect Expression Answer";
		header("Location: new.php?err=$msg");
		die();
	}*/
   print_r($_POST);
	$qry="select * from student where Reg_no=$uname";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	$rec=mysqli_fetch_assoc($rs);
	if (($uname==$rec["Reg_no"]) && ($upass==$rec["pass"]))
	{
		setcookie("chkuser","1");
		setcookie("location","anand",time()+7*24*3600);
		header("Location: result.php?Reg_no=$uname");
		$_SESSION["ans"]=$uname;
	}
	else
	{
		$msg="Incorrect Username and Password";
		header("Location: login.php?err=$msg");
	}	
?>