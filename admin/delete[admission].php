<?php
include("connection.php");
$id=$_GET["id"];

mysql_query("delete from admission where id=$id");
echo"<script> alert('deleted') </scrcipt>";
header('location:http://localhost/web/admin/display[admission].php');

?> 