<?php
include("header.php");
?>
<html>
<head>
<title> admin login </title>
<body>
    <div class="container" align="center"><h1>enter admin name and password</h1></div>
<form action="adminlogin.php" method="post" enctype="multipart/form-data">
<table align="center">
    <tr>
        <td>admin name</td>
        <td><input type="text" name="name" placeholder="name"></td>
    </tr>
    <tr>
        <td> pass</td>
        <td><input type="password" name="pass" placeholder="password"></td>
    </tr><br>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="Login" name="submit1" class="btn btn-primary btn-lg1 btn-block"></td>
    </tr>
    </table>
    </form>
   <?php
    if(isset($_POST['submit1']))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        if($name=="arpit" && $pass=="arpit58")
        {
            echo "<script> document.location='admin/header.php' </script>";
        }
    
    	else
  	  {
   	     echo "<script> alert('error') </script>";
  	  }
   }
    ?>  
</body>
</head>
</html>
