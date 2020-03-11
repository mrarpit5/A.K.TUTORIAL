<?php
include("header.php");
?>



<?php
include("connection.php");
$id=$_GET["id"];
$s=mysql_query("select * from material where id=$id");
$row=mysql_fetch_array($s);
?>
<html>

<form action="edit_data[material].php?id=<?php echo $row['id']; ?>" method="post" >
<table align="center">
    <tr>
    <td>file</td>
    <td><input type="file" name="file" value="<?php echo $row["file"]; ?>"></td>
    </tr>
    <tr>
        <td>description</td>
        <td><input type="text" name="des" value="<?php echo $row["des"]; ?>"></td>
    </tr>
    <tr>
        <td><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
    </tr>
    </table>
    </form>
</html>