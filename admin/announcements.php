<?php
    include("header.php");
?>
<html>
<head>
<title>Announcements</title>    
</head>
<body>
<form method="POST" action="announcements.php" >
<table align="center">
    <tr>
    <td>date</td>
    <td><input type="text" name="date" placeholder="date"></td>
    </tr>
    <tr>
        <td>announcement</td>
        <td><textarea rows="9" cols="50" placeholder="Description.." name="announce"></textarea></td>
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
    $date=$_POST['date'];
	$announce=$_POST['announce'];
	$ans=mysql_query("insert into announcements values('','$date','$announce')");
	if($ans>0)
	{
		echo"<script> alert('insert') </script>";
        echo "<script> document.location='display[announcements].php' </script>";

	}
	else
	{
		echo"<script> alert('error') </script>";
	}
}

?>
