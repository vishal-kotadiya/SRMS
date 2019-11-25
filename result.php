<?php
include "header.php"; 
include "header2.php";
include "chkdata.php";
?>
<br>
<table border=1 content="width=device-width, initial-scale=1" align=center>
		<tr>
		<td>
			<h2 align=center>Agricultural Information Technology</h2>
			<h2 align=center>Anand,AAU-388110</h2>
			
		<table align="left" border=0 cellpadding=2 content="width=device-width, initial-scale=1">
		<?php
			include "connection.php"; 
			 if(isset($_GET["Reg_no"]))
			   $Regno=$_GET["Reg_no"];
			  // echo $Regno;
			 $qry="select * from student where Reg_no=$Regno";
			 if($r=mysqli_query($conn,$qry))
			 {
				    $tr=mysqli_num_rows($r);
				    $rs=mysqli_fetch_assoc($r);
					echo "<tr><td><b>Student Reg No:</td></b><td>".$rs["Reg_no"]."</td></tr>";
				    echo "<tr><td><b>Student Name:</td></b><td>".$rs["name"]."</td></tr>";
				    echo "<tr><td><b>Semester:</td></b><td>".$rs["sem"]."</td></tr>";					
					echo"</table><br><br><br><br>";
					echo"<table width=1000 border=1  cellpadding=2 cellspacing=0><tr>";
					echo"<th><center>Subject</center></th><th><center>Max Marks</center></th><th><center>Obtain Marks</th></tr>";
					echo"<tr><td>OOP Using Java</td><td align=center>".$rs["p1"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>Relational Database Management System</td><td align=center>".$rs["p2"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>System Analysis and Design</td><td align=center>".$rs["p3"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>Website Development Using PHP</td><td align=center>".$rs["p4"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>Basic Instrumentation </td><td align=center>".$rs["p5"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>Fundamentals of Agricultural Economics</td><td align=center>".$rs["p6"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>Fundamentals of Soil Science</td><td align=center>".$rs["p7"]."</td><td align=center>100</td></tr>";
					echo"<tr><td>Fundamentals of Agricultural Extension Education</td><td align=center>".$rs["p8"]."</td><td align=center>100</td></tr>";

					echo"</tr><tr height=40><td align=center>Total Marks:</td><td align=center>".$rs["total"]."</td><td  align=center>800</td>";
					echo "<table border=1 align=center width=400 cellpadding=2 cellspacing=0>";
					
					echo"<tr><td align=center><b>Percentage</b></td><td align=center><b>class</b></td></tr>";	
                    echo"<tr><td align=center>".$rs["per"]."</td><td align=center>".$rs["class"]."</td></tr>";						
				    echo"</tr></table></td></tr></table>";
					echo "</table>";
					echo "</tr>";
					echo"</tr></table></td></tr></table>";
					echo "</table>";	
			 }					
?>

<?php
echo "<br><br>";
include "footer.php";
?>