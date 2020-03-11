<?php
include("header.php");
?>



<?php
include("connection.php");
$id=$_GET["id"];
$s=mysql_query("select * from announcements where id=$id");
$row=mysql_fetch_array($s);
?>
<html>

<form action="edit_data[announcements].php?id=<?php echo $row['id']; ?>" method="post" >
<table align="center">
    <tr>
    <td>date</td>
    <td><input type="text" name="date" value="<?php echo $row["date"]; ?>"></td>
    </tr>
    <tr>
        <td>announcement</td>
        <td><input type="text" name="announce" value="<?php echo $row["announce"]; ?>"></td>
    </tr>
    <tr>
        <td><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td>
    </tr>
    </table>
    </form>
</html>