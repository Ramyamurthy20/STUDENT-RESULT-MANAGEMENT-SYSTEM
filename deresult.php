
<html>
<center>
<font size="6" color="black">


<?php
//connect with mysql 
$con=mysqli_connect('127.0.0.1','root','');

//select te database
mysqli_select_db($con,'srms');

//select query
$sql="DELETE FROM result WHERE name='$_GET[name]'";

//Execute the query

	 $result=mysqli_query($con,$sql);
        
        if (!$result) 
			{
            
            echo'Not updated';
          
        } else{
            
           echo'Deleted Successfully';
            
        }
    


header("refresh:1;url=result.php");
?>
</center>
</font>
</html>