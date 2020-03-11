<?php
include("connection.php");
$id=$_GET['id'];
$s=mysql_query("select * from admission where id=$id");
$row = mysql_fetch_array($s);
if($row["active"] == 0)
{
    mysql_query("update admission set active=1 where id=$id ");
    echo "<script> document.location='display[admission].php' </script>";
}
else
{
    mysql_query("update admission set active=0 where id=$id ");
     echo "<script> document.location='display[admission].php' </script>";
}