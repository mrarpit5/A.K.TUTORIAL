<?php
include("header.php");
?>
<?php
include ("connection.php");
  if(isset($_POST['submit']))
  {
  $id=$_GET['id'];
  $file=$_POST['file'];
  $des=$_POST['des'];
    $ans=mysql_query("update material set file='$file',des='$des' where id=$id");
 		if($ans)
  		{
      			echo "<script> alert('updated') </script>";
      			echo "<script> document.location='display[material].php' </script>";
		}
  		else
  		{
  			echo "<script> alert('Error') </script>";
  		}
  	
}
?>