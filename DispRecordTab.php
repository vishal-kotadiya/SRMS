<SCRIPT language="JavaScript">
	function check()
	{
		cnf=confirm("Are You Sure?");
		return cnf;
	}
</SCRIPT>
<html>
<h1 align=center>Student Result Management System</h1>
<br>
<br>
<p align=right><a href="logout.php">LogOut</a></p>
</html>
<?php
	include_once "connection.php";
	$qry="select * from student order by Reg_no";
	//echo "<br>".$qry;
	if ($rs=mysqli_query($conn,$qry))
	{
		$num=mysqli_num_rows($rs);
		//echo "<br>Total Records:=".$num;
		echo "<FORM action=deleteMulRec.php method=post>";
		echo "<TABLE BORDER=1>";
		echo "<TR><TH>&nbsp;</TH><TH>Reg_no</TH><TH>Name</TH><TH>Sem</TH><Th>DOB</TH><TH>Batch</TH><TH>PASS</TH><TH>AIT211</TH><TH>AIT212</TH><TH>AIT213</TH><TH>AIT214</TH><TH>AGRI211</TH><TH>AGRI212</TH><TH>AGRI213</TH><TH>AGRI214</TH><TH>Total Marks</TH><TH>Percentage</TH><TH>class</TH><TH>&nbsp;</TH><TH>&nbsp;</TH></TR>";
		while($rec=mysqli_fetch_assoc($rs))
		{
			echo "<TR>";
			echo "<TD><input type=checkbox name=chk".$rec["Reg_no"]."></TD>";
			echo "<TD align='center'>".$rec["Reg_no"]."</TD>";
			echo "<TD align='center'>".$rec["name"]."</TD>";
			echo "<TD align='center'>".$rec["sem"]."</TD>";
			echo "<TD align='center'>".$rec["DOB"]."</TD>";
			echo "<TD align='center'>".$rec["Batch"]."</TD>";
			echo "<TD align='center'>".$rec["pass"]."</TD>";
			for ($i=1;$i<=8;$i++)
			{
				echo "<TD align='center'>".$rec["p$i"]."</TD>";
			}	
			echo "<TD align='center'>".$rec["total"]."</TD>";
			echo "<TD align='center'>".$rec["per"]."</TD>";
			echo "<TD align='center'>".$rec["class"]."</TD>";
			echo "<TD><A href=deleteRec.php?reg=".$rec["Reg_no"]." onclick='return check()'>Delete</A></TD>";
			echo "<TD><A href=editRecForm.php?rid=".$rec["Reg_no"]." onclick='return check()'>Edit</A></TD>";
			echo "</TR>";
		}
		echo "</TABLE>";
		echo "<input type=submit name=s1 value=Delete>";
		echo "<A href='StuRecForm.php' onclick='return check()'>Add Record</A>";
		echo "</FORM>";
	}
	else
	{
		echo "<br>".mysqli_error($conn);
		//echo "<br>Not Add Record Successfully";
	}
?>