<?php
include("header.php");
?>
<html>
<head>
<title>Material]</title>
</head>
<body>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
    <th>id</th>
    <th>file</th>
    <th>description</th>
    <th>delete</th>
    <th>edite</th>  
</tr>
    
    
<?php
include("connection.php");
$s=mysql_query("select * from material");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["file"]; ?></td>
<td> <?php echo $row["des"]; ?></td>

<td><a href="delete[material].php?id=<?php echo $row['id']; ?>">
<img src="images/delete.png" height="10%" width="10%"></a></td>
<td> <a href="edit[material].php?id=<?php echo $row['id']; ?>"> 
     <img src="images/edit.png" height="10%" width="10%"></a></td>

</tr>
<?php
} ?>
</thead>
</table>
</div>
     <div align="center"><a href="material.php"><font size="5" color="orange">Add New material</font></a></div>


</body>
</html>
<?php
include("footer.php");
?>