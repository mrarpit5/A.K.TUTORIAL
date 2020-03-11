<?php
include("header.php");
?>
<html>
<head>
    <title>result</title>
</head>
    <body>
        <form method="POST" action="result.php" enctype="multipart/form-data" >
            <table align="center">
                <tr>
                    <td>Upload image..</td>
                    <td><input type="file" name="img"></td>
	           </tr>
                 <tr>
                    <td>name</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>persentage</td>
                    <td><input type="text" name="per"></td>
                </tr>
                <tr>
                    <td>stream</td>
                    <td><input type="text" name="stream"></td>
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
            $file=basename($_FILES["img"]["name"]);
            $name=$_POST['name'];
            $per=$_POST['per'];
            $stream=$_POST['stream'];
            $ans=mysql_query("insert into result values('','$file','$name','$per','$stream')");
            if($ans)
            {
                $target_dir="result/";
                $target_file=$target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                
		      echo"<script> alert('insert') </script>";
                echo "<script> document.location='display[result].php' </script>";
            }
            else
            {
		      echo"<script> alert('error') </script>";
            }
        }
            