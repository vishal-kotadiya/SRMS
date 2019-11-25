<h1 align=center>Student Result Management System</h1>
<br>
<br>
<h3 align=center>Student Record Form</h3>
<FORM action="addrec.php" method=post>
<TABLE align=center border=1>
	<TR>
		<TD>Regstration Number:</TD>
		<TD><input type=textnum  name=txtnum placeholder='Enter Reg Number'></TD>
	</TR>
	<TR>
		<TD>Student Name:</TD>
		<TD><input type=text name=txtname placeholder='Enter Name'></TD>
	</TR>
	<TR>
		<TD>Enter Semester</TD>
		<TD><input type=text name=txtsem placeholder='Enter Semester'></TD>
	</TR>
	<TR>
		<TD>Date Of Birth:</TD>
		<TD><input type=date name=d1></TD>
	</TR>
	<TR>
		<TD>Batch Year:</TD>
		<TD><input type=text placeholder='Enter year of Batch' name=txtbatch></TD>
	</TR>
		<TR>
		<TD>Student Password:</TD>
		<TD><input type=password name=txtpass placeholder='Enter Password'></TD>
	</TR>
	<?php
	$a=0;
	for($i=1;$i<=4;$i++)
	{
		echo "<TR>";
		echo "<TD>AIT 21".$i."</TD>";
		$a++;
		//echo $a;
		echo "<TD><input type='int' name=$a></TD>";
		echo "</TR>";
	}
	for($j=1;$j<=4;$j++)
	{
		echo "<TR>";
		echo "<TD>AGRI 21".$j."</TD>";
		$a++;
		//echo $a;
		echo "<TD><input type='int' name=$a></TD>";
		echo "</TR>";
	}
	?>
	<TR>
		<TD colspan=2 align=center>
			<input type=submit name=s1 value="Add">&nbsp;
			<input type=reset name=s2 value="Cansal">
		</TD>
	</TR>
</TABLE>
</FORM>