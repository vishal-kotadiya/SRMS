<?php
	include_once "connection.php";
	$qry="select * from student order by Reg_no";
	echo "<br>".$qry;
	if ($rs=mysqli_query($conn,$qry))
	{
		$rec=mysqli_num_rows($rs);
		echo "<br>Total Records:=".$rec;
		$rec1=mysqli_fetch_assoc($rs);
		echo "<pre>";
		print_r($rec1);
		$rec2=mysqli_fetch_row($rs);
		print_r($rec2);
		$rec3=mysqli_fetch_object($rs);
		print_r($rec3);
		echo "</pre>";
	}
	else
	{
		echo "<br>".mysqli_error($conn);
		//echo "<br>Not Add Record Successfully";
	}
?>