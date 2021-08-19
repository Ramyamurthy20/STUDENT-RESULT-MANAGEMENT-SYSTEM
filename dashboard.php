<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
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
 .main{
            border-radius: 8px;
            border-width: 5px;
            border-style: solid;
            padding: 30px;
            margin: 7% 20% 0 20%;
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
	<a class="active" href="logout.php">LOGOUT</a>
    
  </div>
</div>
<div class="main">
        <?php
		
            echo '<p><b><center>Number of classes:'.$no_of_classes[0].'</center></b></p>';
            echo '<p><b><center>Number of students:'.$no_of_students[0].'</center></b></p>';
            echo '<p><b><center>Number of results:'.$no_of_result[0].'</center></b></p>';
		
        ?>
    </div>

    <div class="footer">
        <!-- <span>Designed & Coded By Jibin Thomas</span> -->
    </div>
</body>
</html>

<?php
   include('session.php');
?>