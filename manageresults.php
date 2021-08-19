<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>ADMIN</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
	
	
</head>
<style>
body{
	background:url('444.jpg');
background-size:cover;
}
hr.new1 {
  border-top: 1px dashed black;
}
.btn-group .button {
  background-color:#F0677C;
  border: 1px solid black;
  color: white;
  padding: 9px 166px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
    -webkit-transition-duration: 0.7s; /* Safari */
  transition-duration: 0.4s;
   box-shadow: 0 10px 36px 0 rgba(0,0,0,0.5), 0 6px 27px 0 rgba(0,0,0,0.19);
 
}

.btn-group .button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #F0677C;
}

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f27e90;
  border: 1px solid black;
  padding: 10px 10px;
  
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 19px; 
  line-height: 16px;
  border-radius:10px;
  border: 2px solid black;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
    border-radius:30px;
	line-height: 20px;
  border: 1px solid black;
  -webkit-transition-duration: 0.7s; /* Safari */
  transition-duration: 0.4s;
   box-shadow: 0 10px 36px 0 rgba(0,0,0,0.5), 0 6px 27px 0 rgba(0,0,0,0.19);
 
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color:white;
  color: black;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
img {
  border-radius: 50%;
  -webkit-transition-duration: 0.7s; /* Safari */
  transition-duration: 0.4s;
   box-shadow: 0 10px 36px 0 rgba(0,0,0,0.5), 0 6px 27px 0 rgba(0,0,0,0.19);
 
}

</style>


<body>

<div class="header">

<img src="images\1.png"  align="left" width="160"    height="100">
<br>
  <a href="" class="logo">SRMS | Admin</a>
  <div class="header-right">
  <a class="active"  href="class.php">CLASSES</a>
    <a class="active"  href="student.php">STUDENTS</a>
    <a class="active"	href="result.php">RESULTS</a>
	  <a class="active" href="manageresults.php">MANAGE RESULTS</a>
	    
	<a class="active" href="logout.php">LOGOUT</a>
    
  </div>
 </div>

<html>
<body>

        <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Delete Result | Update Result</h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Delete Result
                        </div>
                        <div class="panel-body">
                       <form action="" method="post">
					   <div class="form-group">
    <label for="class_name">Class</label>
<?php
                    include('init.php');
                    include('session.php');
                    
                    $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                        echo '<select name="class_name">';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
				<div class="form-group">
    <label for="rno">Roll No</label>
    <input type="text" class="form-control" id="rno" name="rno" placeholder="Roll No" required />
  </div>
  <button type="submit" name="submit" class="btn btn-danger">Delete</button>
</form>
     
	 </div>
	 </div>
	 </div>			
	 <div class="row" >
                
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Update Result
                        </div>
                        <div class="panel-body">
                       <form action="" method="post">
					   <div class="form-group">
            
    <label for="class_name">Class</label>
	 <?php
                    $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                        echo '<select name="class">';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
				</div>
	 <div class="form-group">
    <label for="rno">Roll No</label>
    <input type="text" class="form-control" id="rn" name="rn" placeholder="Roll No" required />
  </div>
  <div class="form-group">
    <label for="p1">paper1</label>
    <input type="text" class="form-control" id="p1" name="p1" placeholder="paper1" required />
  </div>
  <div class="form-group">
    <label for="p2">paper2</label>
    <input type="text" class="form-control" id="p2" name="p2" placeholder="paper2" required />
  </div>
  <div class="form-group">
    <label for="p3">paper3</label>
    <input type="text" class="form-control" id="p3" name="p3" placeholder="paper3" required />
  </div>
  <div class="form-group">
    <label for="p4">paper4</label>
    <input type="text" class="form-control" id="p4" name="p4" placeholder="paper4" required />
  </div>
  <div class="form-group">
    <label for="p5">paper5</label>
    <input type="text" class="form-control" id="p5" name="p5" placeholder="paper5" required />
  </div>
  <button type="submit" name="submit" class="btn btn-default">Update</button>
</form>
   </div>
                            </div>
                    </div>
                  
                </div>
				</body>
</html>
<?php
    if(isset($_POST['class_name'],$_POST['rno'])) {
        $class_name=$_POST['class_name'];
        $rno=$_POST['rno'];
        echo $class_name;
        echo $rno;
        $delete_sql=mysqli_query($conn,"DELETE from `result` where `rno`='$rno' and `class`='$class_name'");
        if(!$delete_sql){
            echo '<script language="javascript">';
            echo 'alert("Not available")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted")';
            echo '</script>';
        }
    }

   if(isset($_POST['rn'],$_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],$_POST['p5'],$_POST['class'])) {
        $rno=$_POST['rn'];
        $class_name=$_POST['class'];
        $p1=(int)$_POST['p1'];
        $p2=(int)$_POST['p2'];
        $p3=(int)$_POST['p3'];
        $p4=(int)$_POST['p4'];
        $p5=(int)$_POST['p5'];

        $marks=$p1+$p2+$p3+$p4+$p5;
        $percentage=$marks/5;
        

        $sql="UPDATE `result` SET `p1`='$p1',`p2`='$p2',`p3`='$p3',`p4`='$p4',`p5`='$p5',`marks`='$marks',`percentage`='$percentage' WHERE `rno`='$rno' and `class`='$class_name'";
        $update_sql=mysqli_query($conn,$sql);

        if(!$update_sql){
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Updated")';
            echo '</script>';
        }
    }
?>