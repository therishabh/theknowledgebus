<html>
<head>
	<title>The Knowledge Bus</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/media.css">
	<!-- <link rel="stylesheet" href="css/_reset.css"> -->
	<meta name="robots" content="noindex, nofollow">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

	<!-- slider -->
	<link rel="stylesheet" href="css/slider.css">
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<!-- // end slider -->

	<!-- menu -->
	<link rel="stylesheet" href="css/menu/styles.css">
	<script src="js/menu/responsive-nav.js"></script>
	<!-- // end menu -->

	<!-- brand slider -->
	  <link href="css/owl.carousel.css" rel="stylesheet">
	<!-- // end brand slider -->

	<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	
  });
</script>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
	  function initialize() {
	    var position = new google.maps.LatLng(28.6331334,77.2203939);
	    var myOptions = {
	      zoom: 16,
	      center: position,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(
	        document.getElementById("map_canvas"),
	        myOptions);
	 
	    var marker = new google.maps.Marker({
	        position: position,
	        map: map,
	        title:"The Knowledge Bus"
	    });  
	 
	    var contentString = '<strong>The Knowledge Bus</strong><br> A 255/585, Rajiv Chook, New Delhi, INDIA <br>+91-8010 101010 <br>contact@tkb.com';
	    var infowindow = new google.maps.InfoWindow({
	        content: contentString
	    });
	 
	    google.maps.event.addListener(marker, 'click', function() {
	      infowindow.open(map,marker);
	    });
	 
	  }
	 
	</script>

</head>
<body onload="initialize()">
<div class="maindiv">
	<div class="slider">
		<div class="banner">
			<img src="images/slider-1.jpg" alt="">
		</div>
		<div class="circular-slider">
			<img src="images/circular-4.jpg" alt="">
		</div>
	</div><!-- // end slider -->
	
		<div class="logo-menu">
		<div class="row header-fix">
			<div class="col-lg-11 col-centered">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt=""></a>
						</div>
					</div>
					
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

						<div class="menu menu-css">
							<nav id="nav" role="navigation">
								<a href="#nav" title="Show navigation">Show navigation</a>
								<a href="#" title="Hide navigation">Hide navigation</a>
								<ul class="clearfix">

									<li>
										<a href="#">About</a>
										<ul>
											<li><a href="about-us.php">Overview</a></li>
											<li><a href="board-of-directors.php">Board of Directors</a></li>
											<li><a href="curriculum.php">Curriculum & Pedagogy</a></li>
											<li><a href="educational-research.php">Educational Research</a></li>
											<li><a href="business-ethics.php">Ethics & Compliance</a></li>
											<li><a href="our-friends.php">Our Friends</a></li>
										</ul>
									</li>
									<li>
										<a href="#" aria-haspopup="true">Our Institute</a>
										<ul>
											<li><a href="our-institutes.php">Early Childhood Education</a></li>
											<li><a href="primary-secondary.php">Primary/Secondary</a></li>
											<li><a href="higher-education.php">Higher Education</a></li>
											<li><a href="technology.php">Technology</a></li>
										</ul>
									</li>
									<li>
										<a href="business-patners.php" aria-haspopup="true">Parterships</a>
									</li>
									<li>
										<a href="#" aria-haspopup="true">Careers</a>
										<ul>
											<li><a href="careers.php">Early Childhood Education</a></li>
											<li><a href="team-members.php">Faculty Team Members</a></li>
										</ul>
									</li>
									<li>
										<a href="#" aria-haspopup="true">Press Room</a>
										<ul>
											<li><a href="#">News</a></li>
											<li><a href="#">Press Releases</a></li>
											<li><a href="#">Media Requests</a></li>
										</ul>
									</li>
								</ul> 
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row about-us wrapper">
		<div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 col-centered">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">Contact Us</div>
					<div class="description">
						<p>
							All content included on this site, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, and software, is the property of Knowledge Universe or its content suppliers and protected by international copyright laws. The compilation of all content on this site is the exclusive property of Knowledge Universe and protected by international copyright laws. All software used on this site is the property of Knowledge Universe or its software suppliers and protected by international copyright laws. 
						</p>
					</div>
				</div>
			</div>
			<div class="end"></div>
			<div class="row contact-us-form">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">Contact Us Form</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-form-field">
							<div class="contact-form-text">Name :</div>
							<input type="text" class="form-control" placeholder="Enter your Name">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-form-field">
							<div class="contact-form-text">Email Address :</div>
							<input type="text" class="form-control" placeholder="Enter your Email">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-form-field">
							<div class="contact-form-text">Contact Number :</div>
							<input type="text" class="form-control" placeholder="Contact Number">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contact-form-field">
							<div class="contact-form-text">Subject :</div>
							<input type="text" class="form-control" placeholder="Subject">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-form-field">
							<div class="contact-form-text">Address : </div>
							<textarea class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-centered contact-form-field">
							<input type="submit" value="Submit" class="submit-btn">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contact-map">
					<div id="map_canvas" style="width:100%; height:300px;border-radius: 35px;"></div>
				</div>
			</div>
		</div>
	</div>


<footer>
	

	<div class="footer">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 footer-left">
						<div class="footer-link">
							<span><a href="careers.php">Careers</a> | </span>
							<span><a href="sitemap.php">Sitemap</a> | </span>
							<span><a href="terms-of-use.php">Terms of Use</a> | </span>
							<span><a href="contact-us.php">Contact Us</a></span>
						</div>
						<div class="copyright">
							&copy; 2014 The Knowledge Bus, All rights reserved.
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-md-offset-1 col-sm-12 col-xs-12 col-lg-offset-2">
						<div class="row">
							<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  social-icon">
								<div class="social">
									<span><a href="http://www.facebook.com"></a></span>
									<span><a href="http://www.twitter.com"></a></span>
									<span><a href="http://www.youtube.com"></a></span>
									<span><a href="https://plus.google.com"></a></span>
								</div>
								
							</div>
							<div class="col-lg-6 col-md-6 phone">
								
								<div class="phone-icon">
									<img src="images/call-icon.png" alt="">
								</div>
								<div class="num-email">
									<div>+91-8010101050</div>
									<div>contact@theknowledgebus.com</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</footer>

</div><!-- // end maindiv -->
</body>
</html>

<script type="text/javascript">
	$(window).scroll(function(){
		var width = $( window ).width();
		// var height = $( window ).height();
		if( width > 1024 )
		{
		    if ($(window).scrollTop() >= 256) {
		       $('.header-fix').addClass('fixed');
		       $(".logo").addClass('shift-logo-left');
		       $(".logo").removeClass('shift-logo-right');
		       $(".menu").addClass('shift-menu-left');
		       $(".menu").removeClass('menu-css');

		    }
		    else {
		       $('.header-fix').removeClass('fixed');
		       $(".logo").addClass('shift-logo-right');
		       $(".logo").removeClass('shift-logo-left');
		       $(".menu").addClass('menu-css');
		       $(".menu").removeClass('shift-menu-left');

		       
		    }
			
		}
	});

</script>