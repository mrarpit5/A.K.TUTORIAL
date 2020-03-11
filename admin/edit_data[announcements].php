<?php
include("header.php");
?>
<?php
include ("connection.php");
  if(isset($_POST['submit']))
  {
  $id=$_GET['id'];
  $date=$_POST['date'];
  $announce=$_POST['announce'];
    $ans=mysql_query("update announcements set date='$date',announce='$announce' where id=$id");
 		if($ans)
  		{
      			echo "<script> alert('updated') </script>";
      			echo "<script> document.location='display[announcements].php' </script>";
		}
  		else
  		{
  			echo "<script> alert('Error') </script>";
  		}
  	
}
?>