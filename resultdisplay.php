<?php
//create the connection with MYSQL database
$con=mysqli_connect('127.0.0.1','root','');

//select database
if(!mysqli_select_db($con,'srms'))
{
	echo"Database not selected";
}

//select query
$sql="SELECT * FROM result";

//execute the SQL query
$records=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($records))
{
	echo"<tr>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['rno']."</td>";
	echo"<td>".$row['class']."</td>";
	echo"<td>".$row['p1']."</td>";
	echo"<td>".$row['p2']."</td>";
	echo"<td>".$row['p3']."</td>";
	echo"<td>".$row['p4']."</td>";
	echo"<td>".$row['p5']."</td>";
	echo"<td>".$row['marks']."</td>";
	echo"<td>".$row['percentage']."</td>";
	
	
                                echo '</td>';
                  echo "</tr>";
}

?>		