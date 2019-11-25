<?php
	include_once "connection.php";
	$qry="select * from student where Reg_no=".$_GET["rid"];
	$rs=mysqli_query($conn,$qry);
	$rec=mysqli_fetch_assoc($rs);
	/*echo "<pre>";
	print_r($rec);
	echo "</pre>";*/
?>
<FORM action="editQuery.php" method=post>
	<input type=hidden name=txtnum value=<?=$rec["Reg_no"] ?> >
<TABLE align=center border=1>
	<TR>
		<TD>Regestration Number:</TD>
		<TD><?=$rec["Reg_no"] ?></TD>
	</TR>
	<TR>
		<TD>Student Name:</TD>
		<TD><input type=text name=txtname value='<?=$rec["name"] ?>'></TD>
	</TR>
	<TR>
		<TD>Semester:</TD>
		<TD><input type=text name=txtsem value='<?=$rec["sem"] ?>'></TD>
	</TR>
	<TR>
		<TD>Date Of Birth:</TD>
		<TD><input type=date name=d1 value='<?=$rec["DOB"] ?>'></TD>
	</TR>
	<TR>
		<TD>Batch Year:</TD>
		<TD><input type=text name=batch value='<?=$rec["Batch"] ?>'></TD>
	</TR>
	<TR>
		<TD>Password:</TD>
		<TD><input type=text name=txtpass value='<?=$rec["pass"] ?>'></TD>
	</TR>
	<?php
	$a=0;
	for($i=1;$i<=4;$i++)
	{
		echo "<TR>";
		echo "<TD>AIT 21".$i."</TD>";
		$a++;
		//echo $a;
		echo "<TD><input type='int' name=$a size=3 value=".$rec["p$a"]."></TD>";
		echo "</TR>";
	}
	for($j=1;$j<=4;$j++)
	{
		echo "<TR>";
		echo "<TD>AGRI 21".$j."</TD>";
		$a++;
		//echo $a;
		echo "<TD><input type='int'name=$a size=3 value=".$rec["p$a"]."></TD>";
		echo "</TR>";
	}
	?>
	<TR>
		<TD colspan=2 align=center>
			<input type=submit name=s1 value="Save">
		</TD>
	</TR>
</TABLE>
</FORM>