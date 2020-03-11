<?php
include("afterloginheader.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>job</title>

    
    <!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Job</h3>
  		<p class="description">
             We Create A Job Portal For Our Students.It Will Help To Find Best Job In The Market.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">job</li>
            </ul>
        </div>
  	</div>
  </div>
             
    <div class="courses_box1">
	   <div class="container">
           <div class="container" align="center">
            	<h1>JOB</h1>
           </div>
				<div class="flexslider">
					<ul><br>
                        <li><p>In market many jobs are avilable. we will help you to show some reuqrements from the market. </p></li>&nbsp;&nbsp;&nbsp;
                        <li><p>we give a refference for our BCA,MCA,MSC IT&CA,BE,ME,PGDCA and other students.</p></li>&nbsp;&nbsp;&nbsp;
						<li><p>some profesional job are also avilable like.<br>programer,developer,project manager,tester,network administrator etc..</li>&nbsp;&nbsp;&nbsp; 
                        <li><p>we will give a reffrence to our students. students get job by it's owan talent.</p> </li>&nbsp;&nbsp;&nbsp;
						<li><p>all information are avilble as free for over students...</p></li>&nbsp;&nbsp;&nbsp;
                        <li><p>all information should be under copyrights so. you don't use it any business purpose without any permission...</p></li>&nbsp;&nbsp;&nbsp;

				    </ul>
				 </div>
	      	</div>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;

        
        
        
        
        
    <div class="col-md-12">
			<div class="course_list">
                <div class="table-header clearfix">
                	<div class="name_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post Name</div>
                    <div class="education_col">Education</div>
                    <div class="experience_col">Experience</div>
                    <div class="salary_col">Salary</div>
                    <div class="post_col">Post</div>
                    <div class="address_col">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    			</div>
                <ul class="table-list">
<?php
include("connection.php");
$s=mysql_query("select* from job");
while($row = mysql_fetch_array($s))
{ ?>


                
                    <li class="clearfix">
                        <div class="name_col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["pname"]; ?></div>
                        <div class="education_col"><?php echo $row["edu"]; ?></div>
                        <div class="experience_col"><?php echo $row["exp"]; ?></div>
                        <div class="salary_col"><?php echo $row["salary"]; ?> </div>
                        <div class="post_col"><?php echo $row["po"]; ?></div>
                        <div class="address_col"><?php echo $row["add"]; ?></div> 

    				</li>
<?php
}?>

                </ul>
            </div>
           </div>
		    <div class="clearfix"> </div>
	   </div>
	
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <?php
    include("footer.php");
    ?>