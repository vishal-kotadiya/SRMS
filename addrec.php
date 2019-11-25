<?php
	
    $conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"stu");
  
    $reg=$_POST["txtnum"];
    $name=$_POST["txtname"];
	$sem=$_POST["txtsem"];
	$dob=$_POST["d1"];
	$batch=$_POST["txtbatch"];
	$pass=$_POST["txtpass"];
	$p1=$_POST["1"];
	$p2=$_POST["2"];
	$p3=$_POST["3"];
	$p4=$_POST["4"];
	$p5=$_POST["5"];
	$p6=$_POST["6"];
	$p7=$_POST["7"];
	$p8=$_POST["8"];
	$t=100;
	$tot=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8;
	$per=$tot/8;
	echo $per;
	 if(($p1>=40)and($p2>=40)and($p3>=40)and($p4>=40)and($p5>=40)and($p6>=40)and($p7>=40)and($p8>=40))
	 {
		 $res="Pass";
	 }
	 else
	 {
		 $res="Fail";	
	 }
		 if ($res=="Pass")
		{
			if($per>=70)
				$class="Dist";
			else if(($per>=60) && ($per<70))
				$class="First";
			else if(($per>=50) && ($per<60))
				$class="Second";
			else 
				$class="Pass";								
		}
		else
	     {
		   $per="-";
	     }
	$qry="insert into student values('$reg','$name','$sem','$dob','$batch','$pass','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$tot','$per','$class')";
	if (mysqli_query($conn,$qry))
	{
      header("Location: DispRecordTab.php");
	}
	else
	{
		echo "<br>".mysqli_error($conn);
		//echo "<br>Not Add Record Successfully";
	}
	?>