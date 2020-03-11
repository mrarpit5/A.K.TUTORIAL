<?php
include("connection.php");
$id=$_GET["id"];

mysql_query("delete from events where id=$id");
echo"<script> alert('deleted') </scrcipt>";
header('location:http://localhost/web/admin/display[events].php');

?> 