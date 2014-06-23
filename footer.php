
<footer>
	<div class="stay-informed">
		<div class="heading">Stay Informed</div>
		<div class="row">
			<div class="col-lg-11 col-md-10 col-sm-10 col-xs-10 col-centered">
				<div class="row info-form">
					<div class="col-lg-10 col-md-10  col-sm-12 col-xs-12 ">
						<div class="row infoform">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 info-fields"><input type="text" class="form-control" placeholder="Name*"></div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 info-fields"><input type="text" class="form-control" placeholder="Email*"></div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 info-fields"><input type="text" class="form-control" placeholder="Phone No*"></div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 info-fields"><input type="text" class="form-control" placeholder="Pin Code*"></div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-centered info-submit">
								<input type="submit" class="submit-btn">
							</div>
						</div>
					</div>
				</div>
				<div class="info-text">
					Or, If you're looking for more specific News, please <a href="#" rel="nofollow" target="_blank" style="color:rgb(119, 116, 116); text-decoration:underline !important;">Visit our News Center</a> to receive our other news publications.
				</div>
			</div>
		</div>

	</div>

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