<?php
include("header.php");
?>

<!DOCTYPE HTML>
<html>
<body>
    <head>
    <title>Register</title>
    </head>
<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Register</h3>
  		<p class="description">Here You Create An Account On Over Site. </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="icon6"><a href="login.php">Login</a></li>
                <li class="current-page">Register</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" method="post" action="register.php">
                <p class="lead">Register New Account</p>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Name *" name="name">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Email *" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="required form-control" placeholder="Password *" name="pass">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="Mobile No *" name="mno">
                 </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Register">
                    </div>
                <p>Already Have An Account? <a href="login.html">Sign In</a></p>
            </form>
	   </div>
	</div>
<?php
if(isset($_POST['submit']))
{
    include("connection.php");
    $name=$_POST['name'];
	$email=$_POST['email'];
    $pass=$_POST['pass'];
    $mno=$_POST['mno'];
    $no=0;
	$ans=mysql_query("insert into register values('','$name','$email','$pass','$mno',$no)");
	if($ans>0)
	{
		echo"<script> alert('Thanks for your registration after some time your registration will be conform') </script>";
	}
	else
	{
		echo"<script> alert('error') </script>";
	}
}
?>
<?php
    include("footer.php");
?>
    
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
    