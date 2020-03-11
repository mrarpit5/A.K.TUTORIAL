<?php
include("header.php");
?>
<?php
include("connection.php");
  if(isset($_POST['submit']))
  {
    $id=$_GET['id'];
    $pname=$_POST['pname'];
	$edu=$_POST['edu'];
    $exp=$_POST['exp'];
    $salary=$_POST['salary'];
    $po=$_POST['po'];
    $add=$_POST['add'];

    $ans=mysql_query("update job set  pname='$pname',edu='$edu',exp='$exp',salary='$salary',po='$po',add='$add' where id=$id");
 		if($ans)
  		{
      			echo "<script> alert('updated') </script>";
      			echo "<script> document.location='display[job].php' </script>";
		}
  		else
  		{
  			echo "<script> alert('Error') </script>";
  		}
  	
}
?>