<?php
include("header.php");
?>
<html>
<head>
    <title>material</title>
</head>
    <body>
        <form method="POST" action="material.php" enctype="multipart/form-data" >
            <table align="center">
                <tr>
                    <td>Upload material..</td>
                    <td><input type="file" name="file"></td>
	           </tr>
                <tr>
                    <td>description</td>
                    <td><textarea rows="9" cols="50" placeholder="Description.." name="des"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
	           </tr>
            </table>
        </form>
    </body>
    <?php
        if(isset($_POST['submit']))
        {
            include("connection.php");
            $file=basename($_FILES["file"]["name"]);
            $des=$_POST['des'];
            $ans=mysql_query("insert into material values('','$file','$des')");
            if($ans)
            {
                $target_dir="material/";
                $target_file=$target_dir . basename($_FILES["file"]["name"]);
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
                
		      echo"<script> alert('insert') </script>";
                echo "<script> document.location='display[material].php' </script>";

            }
            else
            {
		      echo"<script> alert('error') </script>";
            }
        }
            