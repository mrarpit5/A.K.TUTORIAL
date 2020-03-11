<?php
include("header.php");
?>
<html>
<body>
<head>
<title>Contactus</title>    
</head>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
    <th>no</th>
    <th>name</th>
    <th>email</th>
    <th>phone no</th>
    <th>message</th>
    <th>delete</th>
</tr>
    
    
    
<?php
include("connection.php");
$s=mysql_query("select* from contactus");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["name"]; ?> </td>
<td> <?php echo $row["email"]; ?> </td>
<td> <?php echo $row["pno"]; ?> </td>
<td> <?php echo $row["mess"]; ?> </td>
    
<td><a href="delete[contactus].php?id=<?php echo $row['id']; ?>">
    <img src="images/delete.png" height="10%" width="10%"></a></td>
</tr>
<?php
} ?>
</thead>
</table>
</div>
    </body>
</html>
<?php
include("footer.php");
?>