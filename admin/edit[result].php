<?php
include("header.php");
?>



<?php
include("connection.php");
$id=$_GET["id"];
$s=mysql_query("select * from result where id=$id");
$row=mysql_fetch_array($s);
?>
<html>

<form action="edit_data[result].php?id=<?php echo $row['id']; ?>" method="post" >
<table align="center">
    <tr>
    <td>upload image</td>
    <td><input type="file" name="file" value="<?php echo $row["file"]; ?>"></td>
    </tr>
    <tr>
        <td>name</td>
        <td><input type="text" name="name" value="<?php echo $row["name"]; ?>"></td>
    </tr>
     <tr>
        <td>persentage</td>
        <td><input type="text" name="per" value="<?php echo $row["per"]; ?>"></td>
    </tr>
    <tr>
        <td>stream</td>
        <td><input type="text" name="stream" value="<?php echo $row["stream"]; ?>"></td>
    </tr>
    

    <tr>
        <td><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
    </tr>
    </table>
    </form>
</html>