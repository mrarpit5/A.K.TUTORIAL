<?php
session_start();
if(isset($_SESSION['user']))
{
    session_unset();
    header('Location: http://localhost/web/index.php');
}
else
{
    header('Location: http://localhost/web/login.php');

}
?>