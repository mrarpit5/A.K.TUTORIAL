<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <body>
  <form  method="POST" action="courses.php">
	<table align="center">
        <tr>
        <td>enter id</td>
        <td><input type="text" name="id" placeholder="course id"></td>
        </tr>
        <tr>
        <td>course name</td>
        <td><input type="text" name="cname" placeholder="course name"></td>
        </tr>
        <tr>
        <td>duration</td>
        <td><input type="text" name="dur" placeholder="duration"></td>
        </tr>
        <tr>
        <td>starting date</td>
        <td><input type="text" name="date" placeholder="starting date"> </td>
        </tr>
        <tr>
        <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
        </tr>
      </table>
    </form>
    

<?php
         if(isset($_POST['submit']))
        {
            include("connection.php");
            $id=$_POST['id'];
            $cname=$_POST['cname'];
            $dur=$_POST['dur'];
            $date=$_POST['date'];
	       $ans = mysql_query("insert into courses values('','$id','$cname','$dur','$date')");
            if($ans>0)
            {
		      echo"<script> alert('insert') </script>";
            echo "<script> document.location='display[courses].php' </script>";

            }
            else
            {
		      echo"<script> alert('error') </script>";
            }
        }
?>