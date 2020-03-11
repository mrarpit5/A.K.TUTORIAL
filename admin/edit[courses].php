<?php
include("header.php");
?>



<?php
include("connection.php");
$no=$_GET["no"];
$s=mysql_query("select * from courses where no=$no");
$row=mysql_fetch_array($s);
?>
<html>

<form action="edit_data[courses].php?no=<?php echo $row['no']; ?>" method="post" >
<table align="center">
    <tr>
        <td>enter id</td>
        <td><input type="text" name="id" value="<?php echo $row["id"]; ?>"></td>
        </tr>
        <tr>
        <td>course name</td>
        <td><input type="text" name="cname" value="<?php echo $row["cname"]; ?>"></td>
        </tr>
        <tr>
        <td>duration</td>
        <td><input type="text" name="dur" value="<?php echo $row["dur"]; ?>"></td>
        </tr>
        <tr>
        <td>starting date</td>
        <td><input type="text" name="date" value="<?php echo $row["date"]; ?>"> </td>
        </tr>
        <tr>
        <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
        </tr>
      </table>
    </form>
    