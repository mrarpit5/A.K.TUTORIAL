<?php
session_start();
include("afterloginheader.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Material</title>
</head>

<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Material</h3>
  		<p class="description">
             we provide material for refference and preparation for exam. including short term courses.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Material</li>
            </ul>
        </div>
  	</div>
   </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
           <div class="container" align="center">
            	<h1>MATERIAL</h1>
           </div>
				<div class="flexslider">
					<ul>
                        <li><p>here all material are avilable which will help for preparation. we give a material for BCA,MCA,PGDCA,and oher streams as semester wise.</p></li>&nbsp;&nbsp;&nbsp;
                        <li><p>We also provide material for sort term courses.</p></li>&nbsp;&nbsp;&nbsp;
						<li><p>Some language related data are also avilable like.<br>MS OFFICE,HTML5&CSS,C language,C++,JAVA,PHP,BOOTSTRAP,ASP.NET and other languages.</li>&nbsp;&nbsp;&nbsp; 
                        <li><p>Some data are usefull for learning and some data for programers,developers and students.</p> </li>&nbsp;&nbsp;&nbsp;
						<li><p>all data are avilble as free for over students...</p></li>&nbsp;&nbsp;&nbsp;
                        <li><p>All data should be under copyrights so. you don't use it any business purpose without any permission...</p></li>&nbsp;&nbsp;&nbsp;

				    </ul>
				 </div>
	      	</div>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

        
        
        
        
        
    <div class="col-md-12">
			<div class="course_list">
                <div class="table-header clearfix">
                	<div class="id_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id</div>&nbsp;&nbsp;&nbsp;
                	<div class="name_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File Name</div>
                    
                    <div class="download_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Download</div>
    			</div>
                <ul class="table-list">
<?php
include("connection.php");
$s=mysql_query("select * from material");
while($row = mysql_fetch_array($s))
{ ?>

                
                    <li class="clearfix">
    					<div class="id_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["id"]; ?></div>

        				<div class="name_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["file"]; $_SESSION['f1']= $row["file"]; ?></div>
                        
                        

                        <div class="download_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="download.php"><img src="images/d2.png" height="10%" width="10%"></a></div> 

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