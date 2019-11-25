<?php
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"stu");
	
	$qry="Delete from student where Reg_no=".$_GET["reg"];
	//echo $qry;
	mysqli_query($conn,$qry);
	header("Location: DispRecordTab.php");
?>