<?php
include("header.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Contact us</title>
</head>
<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Contact</h3>
  		<p class="description">
              If You Have Any Query/Suggestion Then Please Contact Us We Give A Replay Soon.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.PHP">Home</a></li>
                <li class="current-page">Contact</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="features">
	   <div class="container">
	   	  <h1>HOW TO FIND US</h1>
	   	  <div class="map"><a href="http://googlemap.com">
              <img src="images/map.png" height="100%" width="100%"></a>
		  </div>
		  <p>hi we  will happy to help you. <br>we also accepted your suggestions. we happy to see your suggestions. <br>if you  have any query about us or your careear,streams,courses,timeing ,then please fill this  detail with your query. or <br> visite the class or contact via mobile no or email <br>we contact you as soon as posible..</p>
		  <div class="wrapper">
				<div class="col_1">
					<i class="fa fa-home  icon2"></i>
					<div class="box">
						<p class="marTop9">Near out side,<br>Khambhadiya gate,<br>Jamnagar<br>361005</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-phone  icon2"></i>
					<div class="box">
						<p class="marTop9">+91 9898247247<br>+91 9099990123</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-envelope icon2"></i>
					<div class="box">
						<p class="m_1">infoak<br>@gmail.com</p>
					</div>
				</div>
				<div class="clearfix"> </div>
		 </div>
		 <form action="contactus.php" method="post" class="contact_form">
		 	<h2>Contact Us</h2>
			<div class="col-md-6 grid_6">
				<input type="text" class="text" placeholder="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" name="name">
				<input type="text" class="text" placeholder="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" name="email">
				<input type="text" class="text" placeholder="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" name="pno">
			</div>
	
			<div class="col-md-6 grid_6">
				<textarea value="Message" placeholder="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" name="mess">Message</textarea>
			</div>
            <div class="clearfix"> </div>
            <div>
			  <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Send message">
		    </div>
		 </form>
							
						
	  </div>
	</div>
    
<?php
if(isset($_POST['submit']))
{
    include("connection.php");
    $name=$_POST['name'];
	$email=$_POST['email'];
    $pno=$_POST['pno'];
    $mess=$_POST['mess'];
	$ans=mysql_query("insert into contactus values('','$name','$email',$pno,'$mess')");
	if($ans)
	{
		echo"<script> alert('Thank You For Contact Us We Contact You As Soon As Possible') </script>";
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