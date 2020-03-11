<?php
include("header.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Courses</title>
</head>

<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>COURSES</h3>
  		<p class="description">
             We Provide Tution Class For any It Languages. Including Short Term Courses With Nominal Fees.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.PHP">Home</a></li>
                <li class="current-page">Courses</li>
            </ul>
        </div>
  	</div>
   </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
           <div class="container" align="center">
            	<h1>COURSES</h1>
           </div>
				<div class="flexslider">
					<ul>
						<li><p>Here all courses are avilable which we provided. we give a tution to BCA,MCA,PGDCA,diploma,and other bachlor as well masters streams as semester wise. we also provide some sort term courses.</p>
						</li><br>
						<li><p>There are many short term class are available.like <br>CCC,MS OFFICE,HTML5&CSS3,C language,C++,JAVA,PHP,BOOTSTRAP,ASP.NET etc.<br> some course are usefull to jenral public,businessman and some are for programers/developers/students.</p> 
                        </li><br>
						<li><p>All courses are avilble to all jenral public with nominal fees...</p></li><br><br>
				    </ul>
				 </div>
	      	</div>:&nbsp;:&nbsp;:&nbsp;
        
        
        
        
        
    <div class="col-md-12">
			<div class="course_list">
                <div class="table-header clearfix">
                	<div class="id_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STREAM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                	<div class="name_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEMESTER NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="duration_col">DURATION</div>
                    <div class="date_col">STARTING DATE</div>
    			</div>
<?php
include("connection.php");
$s=mysql_query("select * from courses");
while($row = mysql_fetch_array($s))
{ ?>

                <ul class="table-list">
                    <li class="clearfix">
    					<div class="id_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["id"]; ?></div>

        				<div class="name_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["cname"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

        				<div class="duration_col"><?php echo $row["dur"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

        				<div class="date_col"><?php echo $row["date"]; ?></div>
    				</li>
<?php
}?>

                </ul>
            </div>
           </div>
		    <div class="clearfix"> </div>
	   </div>
	</div>
    <?php
include("footer.php");
?>