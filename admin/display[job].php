<?php
include("header.php");
?>
<html>
<head>
<title>Job]</title>
</head>
<body>
<div class="container" align="center">
<table class="table table-hover">
<thead>
<tr>
    <th>id</th>
    <th>Post Name</th>
    <th>Education</th> 
    <th>Experience</th>
    <th>Salary</th>
    <th>Post</th>
    <th>Address</th>
    <th>Delete</th>
    <th>Update</th>
    </tr>
    
    
<?php
include("connection.php");
$s=mysql_query("select* from job");
while($row = mysql_fetch_array($s))
{ ?>
<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["pname"]; ?> </td>
<td> <?php echo $row["edu"]; ?> </td>
<td> <?php echo $row["exp"]; ?> </td>
<td> <?php echo $row["salary"]; ?> </td>
<td> <?php echo $row["po"]; ?> </td>
<td> <?php echo $row["add"]; ?> </td>

<td> <a href="delete[job].php?id=<?php echo $row['id']; ?>">
     <img src="images/delete.png" height="10%" width="10%"></a></td>
<td> <a href="edit[job].php?id=<?php echo $row['id']; ?>"> 
     <img src="images/edit.png" height="10%" width="10%"></a></td>
</tr>
<?php
} ?>
</thead>
</table>
</div>
    <div align="center"><a href="job.php"><font size="5" color="orange">Add New job</font></a></div>
</body>
</html>
<?php
include("footer.php");
?>