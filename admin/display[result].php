<?php
include("header.php");
?>
<html>
<head>
<title>Result]</title>    
</head>
<body>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
    <th>id</th>
    <th>student</th>
    <th>name</th>
    <th>persentage</th>
    <th>stream</th>
    <th>delete</th>
    <th>edite</th>
    </tr>
    
    
    
<?php
include("connection.php");
$s=mysql_query("select * from result");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo ("<img src='result/$row[file]' width='10%' height='10%'>");?></td>
<td> <?php echo $row["name"]; ?> </td>
<td> <?php echo $row["per"];?> </td>
<td> <?php echo $row["stream"];?> </td>
<td><a href="delete[result].php?id=<?php echo $row['id']; ?>">
    <img src="images/delete.png" height="30%" width="30%"></a></td>
<td> <a href="edit[result].php?id=<?php echo $row['id']; ?>"><img src="images/edit.png" height="30%" width="30%"></td>
</tr>
<?php
} ?>
    </thead>
</table>
</div>
     <div align="center"><a href="result.php"><font size="5" color="orange">Add New rankers</font></a></div>

    </body>
</html>
<?php
include("footer.php");
?>