<?php
include("connection.php");
$no=$_GET["no"];

mysql_query("delete from courses where no=$no");
echo "<script> alert('deleted') </scrcipt>";
header('location:http://localhost/web/admin/display[courses].php');


?>