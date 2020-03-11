<?php
include("header.php");
?>
<?php
include ("connection.php");
  if(isset($_POST['submit']))
  {
  $id=$_GET['id'];
  $date=$_POST['date'];
  $event=$_POST['event'];
    $ans=mysql_query("update events set date='$date',event='$event' where id=$id");
 		if($ans)
  		{
      			echo "<script> alert('updated') </script>";
      			echo "<script> document.location='display[events].php' </script>";
		}
  		else
  		{
  			echo "<script> alert('Error') </script>";
  		}
  	
}
?>