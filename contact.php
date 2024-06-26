<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Holiday Inn | Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon">
<link rel="icon" href="images/favicon1.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header-->
    <?php include'contactHeader.php';?>
    <!-- Main Menu End-->
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    	<button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <?php include'hidden-bar.php';?>
<!--end of Hidden Navigation Bar-->
    
 <!-- Map Section -->
<section class="map-section">
    <div class="map-outer">
        <!-- Map Canvas -->
        <div class="map-canvas"
            data-zoom="13"
            data-lat="-6.813309"
            data-lng="39.286752"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="Holiday Inn Hotel"
            data-content="Holiday Inn Hotel, Dar es Salaam<br><a href='https://maps.google.com/?q=-6.813309,39.286752' target='_blank'>Open in Google Maps</a>"
            style="height: 680px;">
        </div>
    </div>
</section>
<!-- End Map Section -->

    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            
            	<!--Form Column-->
            	<div class="column form-column col-md-7 col-sm-12 col-xs-12">
                	<div class="default-title"><h3>Send Us Message</h3><div class="separator"></div></div>
                    
					<div class="contact-form default-form">
						<form method="post" action="sendmail.php" id="contact-form">
							<div class="row clearfix">

								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="group-inner">
										<input type="text" name="username" value="" placeholder="Username">
									</div>
								</div>

								<div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="group-inner">
										<input type="email" name="email" value="" placeholder="Email">
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<input type="text" name="phone" placeholder="Phone Number">
									</div>
								</div>

								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<div class="group-inner">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<button type="submit" class="theme-btn btn-style-two">SUBMIT </button>
								</div>
							</div>
						</form>
					</div>
                </div>
                
                <!--Info Column-->
                <div class="column info-column col-md-5 col-sm-12 col-xs-12">
                	<!--Default Title-->
                	<div class="default-title"><h3>Our Address</h3><div class="separator"></div></div>
                    <!--Contact Info-->
                    <div class="contact-info">
                    	<div class="text">Lorem ipsum dolor sit amet, placerat corrumpit eum ei. Qui id illum nullam volutpat, vix te posse malis viri. Mei ludus nusquam elaboraret ex an.</div>
                        <ul>
                        	<li><span class="icon flaticon-placeholder"></span>Address<span><br>Azikiwe Street TZ, Upanga Rd, Dar Es Salaam 11105</span></li>
                            <li><span class="icon flaticon-envelope"></span>Email<span><br>reservations@holidayinn.co.tz</span></li>
                            <li><span class="icon flaticon-phone-call"></span>Phone<span><br>+255 222 139 250</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--NewsLetter-->
    <section class="newsletter-section" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<h2>Subscribe Our Newsletter</h2>
            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum dummy text</div>
            <a class="theme-btn btn-style-two" href="#">Subscribe</a>
        </div>
    </section>
    <!--NewsLetter-->
    
    <!--Main Footer-->
    <?php include'footer.php';?>
    <!--End Main Footer-->
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>


</html>