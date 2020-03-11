<?php
include("header.php");
?>


<!DOCTYPE HTML>
<html>
<head>
<title>A.K TUTORIALS</title>
</head>
<body>
<!-- banner -->
	<div class="banner">
			<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					
<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
											<h3>Take The First Step<span>For Knowledge</span></h3>
											<p>Now Join Us And Learn Diffrent Proraming Languages.
											</p>
											<a href="courses.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											<h3>Stay in Touch</h3>
											<p>Contact us about your bride futuer and professional life </p>
											<a href="contactus.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>Contact Us</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img">
									<div class="container">
										<div class="banner-info">
                                            </div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg">
									<div class="container">
										<div class="banner-info">
                                        <h3>Professional Developement</h3>						<p>We Provide A  Diffrent Class For Related Streams Admission Are Open Now</p>
											<a href="admission.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>Admission</a>

                                        </div>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-bg banner-img2">
									<div class="container">
										<div class="banner-info">
											
										</div>
									</div>
								</div>
							</li>
							
						</ul>
		          </div>
	</div>
    <!--//announcements -->
    <div class="grid_1">
     	<div class="container">
     		<div class="col-md-4">
                <div class="news">
                    <h1>Announcements</h1>
                    <div class="section-content">
        
    <?php
          include("connection.php");
          $s=mysql_query("select * from announcements limit 3");
          while($row = mysql_fetch_array($s))
    { ?>
                    
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i><b><i class="read-more"></i> <?php echo $row["date"]; ?></b></figure>
                            <?php echo $row["announce"]; ?>
                        </article>
                    
                        
    <?php
    }?>
    <!--//announcements over -->

                                                
                    </div><!-- /.section-content -->
                    <a href="announcements.php" target="_blank" class="read-more">All Announcements</a>
                </div><!-- /.news-small -->
            </div>
            
            
            <div class="col-md-8 grid_1_right">
              <h2>UPCOMING EVENTS</h2>
        <?php
          include("connection.php");
          $s=mysql_query("select * from events limit 3");
          while($row = mysql_fetch_array($s))
    { ?>
                
                        <div class="icon_2"><i class="fa fa-clock-o"></i><?php echo $row["date"]; ?></div>
                        <div class="event_right">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["event"]; ?></p><br>&nbsp;
		    	         </div>
                    
       <?php
    }?>             </div>
            <a href="events.php" target="_blank" class="read-more">All Events</a>
                </div>
                    <div class="clearfix"></div>
            
			   </div>
			 
			 
			 </div>
		    </div>
      <div class="clearfix"> </div>
     </div>
    
    
    
    
    <!-- /image-content -->
    <div class="bg">
	  	 <div class="col-md-6 service_2-left">
              <h2>Professional Education tution class</h2>
         </div>
        <div class="col-md-6 service_2-right">
            <p>"A.K.TUTORIAL is a tution class which will provide a it tution class in jamanagar from the previous 10 years. the main goal is to develop logcal person in it filed.it will help to connect more and more people into computer science or digital envirement.it will offer some sortem courses also like ms office,ccc,etc which will help to learn computer and make people computer friendely.it will placed on center area of the city and near railway station. it will also provide website development and application developement accoding to customer requirments with nominal fees.."</p>
         </div>
         <div class="clearfix"> </div>

   </div>
    <!--//image is over -->

    
    
    
    
   <div class="bottom_content">  
   	 <h3>OUR FACILITIES</h3>
     <div class="grid_2">
     	<div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/fa5.jpg" class="img-responsive" alt=""/>
                <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">COMPUTER LAB</a></h4>
               <p>we provide a computer lab with internet access to over students.it helps for practies with diffrent languages. lab teachers are also avilble for teaching and lab guidences.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/t10.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">MATERIALS</a></h4>
               <p>we provide a best material to over students.that helps for exams and logical developement.we also give a diffrent types of practces file which help for logical development and memory development.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/fa1.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">CLASS</a></h4>
               <p>we create best envirement for teaching to over students.all classes have cctv cemera,ac,projecter,and other facelity</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
     </div>
     <div class="grid_3">
     	<div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/fa2.jpg" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">TEST </a></h4>
               <p>we organize monthely and weekley exams for our students.we declare result fast as soon as possible.exams are helpfull for study and reduce the weekness of the students. </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/fa3.png" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">JOB PLACEMENTS</a></h4>
               <p>we organize the job placements with diffrnet companyes.we colabrate with diffrent company and provide a diffrent job requiremnt to over students. student get platform to create it's carrer in company </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 portfolio-left">
            <div class="portfolio-img event-img">
                <img src="images/fa4.png" class="img-responsive" alt=""/>
                 <div class="over-image"></div>
            </div>
            <div class="portfolio-description">
               <h4><a href="#">PERSONAL GUIDANCE</a></h4>
               <p>we guide to all students personly. we happy to help to our students for any query like carrer,streams,job etc. </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
     </div>
    </div>
    

                <div class="container">
                <div class="container" align="center">
                    <p class="description"><h1>Message For Our Visitor..</h1> </p>
                </div>
            </div>
                    <div class="container">
                        <div class="container" align="center">
                            <p>R.K.TUTORIAL places the highest value on comprehensive professional education incorporating curricular, co-curricular and extra-curricular activities that enable every student at the class to acquire skills essential for facing the challenges of life wheher personal,community or professional. <br>our main aim is to build the powers of human mined and spirit. we aim to evaluate our students on the basis of their physical,mental,social,emotional and intellecutual development. <br>i behalf of R.K.TUTORIAL welcome all the students and wish you all the best for achieving greater success and scaling new heights in the coming session</p>
                        </div>
                    </div>
                <div class="container">
                    <div class="container" align="center">
                    <p class="description"><h1>Message For Our Students..</h1> </p>
                    </div>
                </div>
                    <div class="container">
                        <div class="container" align="center">
                            <p>whatever is done must be done with passion for only in that lies perfection. never let fear or embarrassment keep you from participating in activities that interest you because only because of them you can find the real you. <br>the deepest regret in life is always for not doing what you wanted to.let that not become a part of you also never betray the trust of someone for that is the most fragile and precious bond of all. once broken ,it can never be salvaged.above all never get so involved in what you are doing that you forget to enjoy yourselves.<br> the secret of your success lies in your own happiness and well doing... </p>
                        </div>
                    </div>

    
    
    
    
    
    
    
    
    <?php
    include("footer.php");
    ?>