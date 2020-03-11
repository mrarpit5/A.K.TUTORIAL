<?php
include("header.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admission</title>
</head>
<body>
<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>ADMISSION</h3>
  		<p class="description">
              This Is Over Admission Form. Now Join Us And See The Success.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Admissions</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="admission">
	   <div class="container">
	   	  <h1>INTRODUCE YOURSELF</h1>
	   	  <p>please submit full detail with latest photo
           <p>please submit form on capital words</p>
           <p>after submition we will contact you via mobile no and email address and give a full deatil about next process thanks..</p>
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>PERSONAL INFORMATION</h2>
	   	  	<form action="admission.php" method="POST" enctype="multipart/form-data">
             
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="name" placeholder="Full Name" type="text">
             </div>         
            <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="dob" placeholder="Date Of Birth" type="text">
             </div>
             
            <div class="select-block1">
                <select name="courses">
                    <option value="bca">BCA</option>
                    <option value="mca">MCA</option>
                    <option value="pgdca">PGDCA</option>
                    <option value="diploma">DIPLOMA</option>
                    <option value="mscit&ca">MSC IT&CA</option>
                    <option value="projecttraning">PROJECT TRANING</option>
                </select>
              </div>
                <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="sno" placeholder="Semester No" type="text">
             </div>

                  <div class="clearfix"> </div>
                           <div class="form-group col-md-12 form-group1">
                                <label class="col-md-7 control-lable" for="sex">Sex <em>*</em> : </label>
                                    <div class="col-md-5">
                                        <div class="radios">
				                            <label for="r1" class="label_radio">
				                                <input type="radio" name="gen" value="male">Male
                                            </label>
				                            <label for="r1" class="label_radio">
                                                <input type="radio" name="gen" value="female">Female
                                            </label>
	                                   </div>
                                    </div>
                <div class="clearfix"> </div>
                        </div>
             <div class="form-field">
			   <div class="col-md-7 photo"><label>Upload Photo <em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
			   <div class="col-md-5"><input type="file" name="file" class="file upload_1" onchange="AlertFilesize();"></div>
			   <div class="clearfix"> </div>
             </div>
                </div>
            <div class="col-md-6 admission_right">
              <h3>CONTACT INFORMATION</h3>
                <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="add" placeholder="Address" type="text">
	             </div>
                <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="email" placeholder="Email" type="text">
	             </div>
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="pno" placeholder="Phone no" type="text">
	             </div>	
	   	   </div>
	   	  <div class="clearfix"> </div>
	   	 										
              <div align="center">
                  <input type="submit" value="Apply Now" class="course-submit" name="submit"></div>	
				   <div class="clearfix"> </div>
	   </div>
	</div>
    </div>
    </form>
    </body>
</html>


<?php
if(isset($_POST['submit']))
{
    include("connection.php");
    $name=$_POST['name'];
	$dob=$_POST['dob'];
    $courses=$_POST['courses'];
    $sno=$_POST['sno'];
    $gen=$_POST['gen'];
    $file=basename($_FILES["file"]["name"]);
    $add=$_POST['add'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $ad=0;
    
            $ans=mysql_query("insert into admission values('','$name','$dob','$courses',$sno,'$gen','$file','$add','$email',$pno,$ad)");
	       if($ans>0)
	       {
                $target_dir="admin/admission/";
                $target_file=$target_dir . basename($_FILES["file"]["name"]);
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

               echo "<script> alert('your admission will be conform. over team contact you as soon as early..') </script>";
                            }
	       else
	       {
		      echo"<script> alert('error') </script>";
	       }
}
?>

<?php
include("footer.php");
?>