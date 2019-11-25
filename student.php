
<?php
	include_once "connection.php";
	$qry="select * from student order by Reg_no";
	//echo "<br>".$qry;
	if ($rs=mysqli_query($conn,$qry))
	{
		$num=mysqli_num_rows($rs);
		//echo "<br>Total Records:=".$num;
		echo "<TABLE BORDER=1 align=center>";
		echo "<TR><TH>Reg_no</TH><TH>Name</TH><TH>Sem</TH><Th>DOB</TH><TH>Batch</TH></TR>";
		while($rec=mysqli_fetch_assoc($rs))
		{
			echo "<TR>";
			echo "<TD align='center'>".$rec["Reg_no"]."</TD>";
			echo "<TD align='center'>".$rec["name"]."</TD>";
			echo "<TD align='center'>".$rec["sem"]."</TD>";
			echo "<TD align='center'>".$rec["DOB"]."</TD>";
			echo "<TD align='center'>".$rec["Batch"]."</TD>";
			echo "</TR>";
		}
		echo "</TABLE>";
	}
	else
	{
		echo "<br>".mysqli_error($conn);
		//echo "<br>Not Add Record Successfully";
	}
?>