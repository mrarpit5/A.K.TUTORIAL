<?php
session_start();
?>


<?php
include("header.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
	<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Login</h3>
  		<p class="description">we provide diffrent materials to over student now practice and learn something new but first of all you login to over site and after confomation you used it.. 
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Login</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" action="login.php" method="post">
	    	<p class="lead">Welcome Back!</p>
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="name" class="required form-control" placeholder="Username">
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" class="password required form-control" placeholder="Password" name="pass">
		    </div>
		    <div class="form-group">
		    	<input type="checkbox" name="remember" value="true"> Remember Me
		    	<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Log In">
		    </div>
	        <p>Don't have an account? <a href="register.php" title="Sign Up">Sign Up</a></p>
		 </form>
	   </div>
	</div>
    <?php
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        if($name=="arpit" && $pass=="arpit58")
        {
            echo "<script> document.location='admin/index.php' </script>";
        }
        else
        {
        include("connection.php");
        $s=mysql_query("select * from register where name='$name' and pass='$pass'");
        $row=mysql_fetch_array($s);
        if($row["name"]==$_POST['name'] && $row["pass"]==$_POST['pass'] && $row["active"]==1)
        {
        
            $_SESSION['user']=$_POST['name'];
            echo "<script type='text/javascript'>alert('welcome $name hope you having goos time.');window.location='material.php';
            </script>";
            
        }
        
        else
        {
            echo "<script> alert ('not registerd') </script>";
        }
        }
    }
    ?>
    
    
    
  <?php
    include("footer.php");
    ?>