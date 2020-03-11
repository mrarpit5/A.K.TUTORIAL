<?php
include("header.php");
?>
<?php
include ("connection.php");
  if(isset($_POST['submit']))
  {
  $id=$_GET['id'];
  $file=$_POST['file'];
  $name=$_POST['name'];
  $per=$_POST['per'];
  $stream=$_POST['stream'];
    $ans=mysql_query("update material set file='$file',name='$name',per='$per',stream='$stream' where id=$id");
 		if($ans)
  		{
      			echo "<script> alert('updated') </script>";
      			echo "<script> document.location='display[result].php' </script>";
		}
  		else
  		{
  			echo "<script> alert('Error') </script>";
  		}
  	
}
?>