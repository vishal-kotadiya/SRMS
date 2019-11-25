<?php
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"stu");
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	foreach ($_POST as $k=>$v)
	{
		if ($v=="on")
		{
			$arr[]=substr($k,3);
		}
	}
	print_r($arr);
	$qry="Delete from student where Reg_no in(".implode(',', $arr).")";
//	echo "<br>".$qry;
	mysqli_query($conn,$qry);
	
	header("Location: DispRecordTab.php");	
?>