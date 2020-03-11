<?php
    include("header.php");
?>
<html>
<head>
<title>Job</title>    
</head>
<body>
<form method="POST" action="job.php" >
<table align="center">
    <tr>
    <td>Post Name</td>
    <td><input type="text" name="pname" placeholder="post name"></td>
    </tr>
    <tr>
    <td>Education</td>
    <td><input type="text" name="edu" placeholder="education list"></td>
    </tr>
    <tr>
    <td>Experience</td>
    <td><input type="text" name="exp" placeholder="experience"></td>
    </tr>
    <tr>
    <td>Salary</td>
    <td><input type="text" name="salary" placeholder="salary"></td>
    </tr>
    <tr>
    <td>Post</td>
    <td><input type="text" name="po" placeholder="post"></td>
    </tr>
    <tr>
    <td>Address</td>
    <td><input type="text" name="add" placeholder="address"></td>
    </tr>
    
    <tr>
        <td><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
    </tr>
    </table>
    </form>
<?php
if(isset($_POST['submit']))
{
    include("connection.php");
    $pname=$_POST['pname'];
	$edu=$_POST['edu'];
    $exp=$_POST['exp'];
    $salary=$_POST['salary'];
    $po=$_POST['po'];
    $add=$_POST['add'];
	$ans=mysql_query("insert into job values('','$pname','$edu','$exp','$salary','$po','$add')");
	if($ans)
	{
		echo"<script> alert('insert') </script>";
        echo "<script> document.location='display[job].php' </script>";

	}
	else
	{
		echo"<script> alert('error') </script>";
	}
}

?>
