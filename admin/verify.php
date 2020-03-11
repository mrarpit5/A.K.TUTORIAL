<?php
include("connection.php");
$id=$_GET['id'];
$s=mysql_query("select * from register where id=$id");
$row = mysql_fetch_array($s);
if($row["active"] == 0)
{
    mysql_query("update register set active=1 where id=$id ");
    echo "<script> document.location='display[register].php' </script>";
}
else
{
    mysql_query("update register set active=0 where id=$id ");
     echo "<script> document.location='display[register].php' </script>";
}