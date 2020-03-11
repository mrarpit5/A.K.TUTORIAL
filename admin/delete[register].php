<?php
include("connection.php");
$id=$_GET["id"];

mysql_query("delete from register where id=$id");
echo"<script> alert('deleted') </scrcipt>";
header('location:http://localhost/web/admin/display[register].php');
?>