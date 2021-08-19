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
 </div>
<br>
<br>
<br>
<html>
<body>
<form method="post">
 <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage class
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                
											<?php
$link=mysqli_connect("localhost","root","","srms");
$msg="";
$id=isset($_REQUEST['id'])? $_REQUEST['id']:"0";
if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['name'];

$query1="update class set 
name='$name'where id=".$id;
if(mysqli_query($link,$query1))
{
$msg="Record update!";
}
else
{
$msg="Unable to update!";
}
}
$query="select * from class where id=".$id;
$data=mysqli_query($link,$query);
$rec=mysqli_fetch_array($data);
?>

Name:<input type="text" value="<?php echo 
$rec['name'];?>"name="name"/>
<br/><br/>

<input type="submit" name="submit" value="Update"/>
<?php echo $msg; ?>
<BR>

<td><a href="class.php?id=<?php echo 
$rec['id'];?>"><B>BACK</B></a></td>


</form>

</body>
</html>