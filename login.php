<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    
	<link rel="stylesheet" href="./assets\css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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

<img src="images\1.png"  align="left" width="155"    height="100">
<br>
  <a href="" class="logo">SRMS | Admin</a>
  </div>
    <div class="main">
        <div class="login">
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading">Admin Login</legend>
                    <input type="text" name="userid" placeholder="Email" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    <input type="submit" value="Login">
                </fieldset>
            </form>    
        </div>
        <div class="search">
            <form action="./student1.php" method="get">
                <fieldset>
                    <legend class="heading">For Students</legend>

                    <?php
                        include('init.php');

                        $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                            echo '<select name="class">';
                            echo '<option selected disabled>Select Class</option>';
                        while($row = mysqli_fetch_array($class_result)){
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                        echo'</select>'
                    ?>

                    <input type="text" name="rn" placeholder="Roll No">
                    <input type="submit" value="Get Result">
                </fieldset>
            </form>
        </div>
    </div>

</body>
</html>

<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>

