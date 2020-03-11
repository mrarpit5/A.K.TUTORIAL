<?php
include("header.php");
?>
<html>
<head>
<title>Register]</title>    
</head>
<body>
<div class="container">
<table class="table table-hover">
<thead>
<tr>
    <th>Id</th>
    <th>Student Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Mobile no</th>
    <th>Delete</th>
    <th>Status</th>
    <th>Active/Deactive User</th>
</tr>
    </thead>

    
    
<?php
include("connection.php");
$s=mysql_query("select * from register");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["name"]; ?> </td>
<td> <?php echo $row["email"]; ?> </td>
<td> <?php echo $row["pass"]; ?> </td>
<td> <?php echo $row["mno"]; ?> </td>
<td><a href="delete[register].php?id=<?php echo $row['id']; ?>">
    <img src="images/delete.png" height="10%" width="30%"></a></td>
<td> <?php echo $row["active"]; ?> </td>    
<td><a href="verify.php?id=<?php echo $row['id']; ?>">
    <img src="images/right.png" height="10%" width="30%"></a></td>
</tr>
<?php
} ?>
    </table>
</div>
    </body>
</html>
<?php
include("footer.php");
?>