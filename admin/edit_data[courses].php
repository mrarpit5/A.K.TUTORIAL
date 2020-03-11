<?php
include("header.php");
?>
<?php
include ("connection.php");
  if(isset($_POST['submit']))
  {
  $no=$_GET['no'];
  $id=$_POST['id'];
  $cname=$_POST['cname'];
  $dur=$_POST['dur'];
  $date=$_POST['date'];
    $ans=mysql_query("update courses set id='$id',cname='$cname',dur='$dur',date='$date' where no=$no");
 		if($ans)
  		{
      			echo "<script> alert('updated') </script>";
      			echo "<script> document.location='display[courses].php' </script>";
		}
  		else
  		{
  			echo "<script> alert('Error') </script>";
  		}
  	
}
?>