<?php
session_start();
include("header.php");
?>
<html>
<head>
<title>Admission</title>
</head>
<body>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
    <th>id</th>
    <th>name</th>
    <th>dob</th> 
    <th>courses</th>
    <th>sno</th>
    <th>gender</th>
    <th>file</th>
    <th>add</th>
    <th>email</th>
    <th>pno</th>
    <th>delete</th>
    <th>active</th>
    <th>Conform</th>
    </tr>
    
    
<?php
include("connection.php");
$s=mysql_query("select * from admission");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td> <?php $_SESSION['id']=$row['id']; ?>
<td> <?php echo $row["name"]; ?> </td>
<td> <?php echo $row["dob"]; ?> </td>
<td> <?php echo $row["courses"]; ?> </td>
<td> <?php echo $row["sno"]; ?> </td>
<td> <?php echo $row["gen"]; ?> </td>
<td> <?php echo ("<img src='admission/$row[file]' width='30%' height='30%'>");?> </td>
<td> <?php echo $row["add"]; ?> </td>
<td> <?php echo $row["email"]; ?> </td>
<td> <?php echo $row["pno"]; ?> </td>   
<td><a href="delete[admission].php?id=<?php echo $row['id']; ?>">
    <img src="images/delete.png" height="30%" width="40%"></a></td>
    <td> <?php echo $row["active"]; ?> </td> 
    <td><a href="active.php?id=<?php echo $row['id']; ?>">
    <img src="images/right.png" height="20%" width="30%"></a></td>
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