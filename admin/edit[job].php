<?php
include("header.php");
?>



<?php
include("connection.php");
$id=$_GET["id"];
$s=mysql_query("select * from job where id=$id");
$row=mysql_fetch_array($s);
?>
<html>

<form action="edit_data[job].php?id=<?php echo $row['id']; ?>" method="post" >
<table align="center">
    <tr>
    <td>Post Name</td>
    <td><input type="text" name="pname" placeholder="post name" value="<?php echo $row["pname"]; ?>"></td>
    </tr>
    <tr>
    <td>Education</td>
    <td><input type="text" name="edu" placeholder="education list" value="<?php echo $row["edu"]; ?>"></td>
    </tr>
    <tr>
    <td>Experience</td>
    <td><input type="text" name="exp" placeholder="experience" value="<?php echo $row["exp"]; ?>"></td>
    </tr>
    <tr>
    <td>Salary</td>
    <td><input type="text" name="salary" placeholder="salary" value="<?php echo $row["salary"]; ?>"></td>
    </tr>
    <tr>
    <td>Post</td>
    <td><input type="text" name="po" placeholder="post" value="<?php echo $row["po"]; ?>"></td>
    </tr>
    <tr>
    <td>Address</td>
    <td><input type="text" name="add" placeholder="address" value="<?php echo $row["add"]; ?>"></td>
    </tr>
    <tr>
        <td><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
    </tr>

    </table>
    </form>
</html>