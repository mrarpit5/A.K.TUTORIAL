<?php
session_start();
if(isset($_SESSION['user']))
{
    $file=$_SESSION['f1'];
    header('Location: http://localhost/web/admin/material/' .$file);
}
else
{
     header('Location: http://localhost/web/index.php');

}
