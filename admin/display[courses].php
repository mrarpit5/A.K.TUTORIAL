<?php
include("header.php");
?>
<html>
<head>
<title>Courses</title>    
</head>
<body>
<div class="container" align="center">
<table class="table table-hover">
<thead>
<tr>
    <th>no</th>
    <th>id</th>
    <th>cname</th>
    <th>duration</th>
    <th>starting date</th>
    <th>delete</th>
    <th>edite</th>
</tr>
    
    
<?php
include("connection.php");
$s=mysql_query("select * from courses");
while($row=mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["no"]; ?> </td>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["cname"]; ?> </td>
<td> <?php echo $row["dur"]; ?> </td>
<td> <?php echo $row["date"]; ?> </td>
<td><a href="delete[courses].php?no=<?php echo $row['no']; ?>">
    <img src="images/delete.png" height="10%" width="10%"></a></td>
<td> <a href="edit[courses].php?no=<?php echo $row['no']; ?>">
    <img src="images/edit.png" height="10%" width="10%"></a></td>
</tr>
<?php
} ?>
</thead>
</table>
</div>
    <div align="center"><a href="courses.php"><font size="5" color="orange">Add New courses</font></a></div>
    </body>
</html>
<?php
include("footer.php");
?>