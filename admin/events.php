<?php
    include("header.php");
?>
<html>
<head>
<title>events</title>    
</head>
<body>
<form method="POST" action="events.php" >
<table align="center">
    <tr>
    <td>date</td>
    <td><input type="text" name="date" placeholder="date"></td>
    </tr>
    <tr>
        <td>event name</td>
        <td><textarea rows="9" cols="50" placeholder="event name" name="event"></textarea></td>
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
	$event=$_POST['event'];
	$ans=mysql_query("insert into events values('','$date','$event')");
	if($ans>0)
	{
		echo"<script> alert('insert') </script>";
        echo "<script> document.location='display[events].php' </script>";

	}
	else
	{
		echo"<script> alert('error') </script>";
	}
}

?>
