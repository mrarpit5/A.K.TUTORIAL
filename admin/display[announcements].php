<?php
include("header.php");
?>
<html>
<head>
<title>announcements</title>
</head>
<body>
<div class="container" align="center">
<table class="table table-hover">
<thead>
<tr>
    <th>id</th>
    <th>date</th>
    <th>announcements</th> 
    <th>delete</th>
    <th>update</th>
    </tr>
    
    
<?php
include("connection.php");
$s=mysql_query("select* from announcements");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["date"]; ?> </td>
<td> <?php echo $row["announce"]; ?> </td>

<td> <a href="delete[announcements].php?id=<?php echo $row['id']; ?>">
     <img src="images/delete.png" height="10%" width="10%"></a></td>
<td> <a href="edit[announcements].php?id=<?php echo $row['id']; ?>"> 
     <img src="images/edit.png" height="10%" width="10%"></a></td>
</tr>
<?php
} ?>
</thead>
</table>
</div>
    <div align="center"><a href="announcements.php"><font size="5" color="orange">Add New Announcements</font></a></div>
</body>
</html>
<?php
include("footer.php");
?>