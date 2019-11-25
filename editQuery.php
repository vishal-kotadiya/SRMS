<?php
	include "connection.php";
	
	$reg=$_POST["txtnum"];
    $name=$_POST["txtname"];
	$sem=$_POST["txtsem"];
	$batch=$_POST["Batch"];
	$dob=$_POST["d1"];
	$pass=$_POST["txtpass"];
	$p1=$_POST["1"];
	$p2=$_POST["2"];
	$p3=$_POST["3"];
	$p4=$_POST["4"];
	$p5=$_POST["5"];
	$p6=$_POST["6"];
	$p7=$_POST["7"];
	$p8=$_POST["8"];
	
	$qry="update student set  name='$name',sem='$sem',DOB='$dob',Batch='$batch',pass='$pass',p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5',p6='$p6',p7='$p7',p8='$p8' where Reg_no='$reg'";
	echo $qry;

	
	if (mysqli_query($conn,$qry))
	{
		header("Location: DispRecordTab.php");
	}
	else
	{
		echo "<br>Invalid Data<br>".mysqli_error($conn);
	}

?>