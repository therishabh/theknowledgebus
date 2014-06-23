<?php include 'header-index.php' ?>
	

	<div class="row content">
		<div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 col-centered">
			<p>
			Knowledge Universe is a leading global education organisation with a network of more than 3,000 locations worldwide, employing over 30,000 education professionals, operating early childhood education centres, international schools, colleges, large on-line schools and school management systems, which together touch over 300,000 students daily.
			</p>
			<span class="more learn-more-1"><a><span data-hover="Learn more..">Learn more..</span></a></span>
			<p class="desc-content">
			We employ proven teaching methods, rigorous curricula, passionate educators and sophisticated educational technology to serve a wide range of learners from infants and toddlers to primary and secondary students, and adult learners. Providing world-class educational resources and infrastructure, with well-recognised brand names, Knowledge Universe owns and operates pre-schools, schools, colleges, products and services in key education segments - early childhood, primary/secondary and higher learning - and supports our institutions and businesses through the use of proprietary technology in learning management systems.
			</p>
			<span class="more less-more-1">Less..</span>
		</div>
	</div>

	
	<div class="vision-mission">
		<div class="row">
			<div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 col-centered">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="vision">
							<div class="heading">
								Vision
							</div>
							<div class="exp">
								Knowledge Universe is a leading global education organisation with a network of more than 3,000 locations worldwide, employing over 30,000 education professionals
							</div>
						</div>
						<div class="mission">
							<div class="heading">
								Mission
							</div>
							<div class="exp">
								Knowledge Universe is a leading global education organisation with a network of more than 3,000 locations worldwide, employing over 30,000 education professionals
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-md-offset-2 col-sm-12 col-xs-12 col-lg-offset-2">
						<div class="blog-we-follow">

							<div class="heading">Blog We Follow</div>

							<div class="row blog">
								<div class="col-lg-3 col-sm-2">
									<div class="blogimg"><img src="images/11.jpg" alt=""></div>
								</div>
								<div class="col-lg-9 col-sm-10 col-xs-12">
									<div class="blog-title">Authentic Learning</div>
									<div class="blog-exp">
										This newer offering from Adtile uses vanilla JavaScript (no jQuery), and sets up a fixed navbar. It uses Fastclick.
									</div>
								</div>
							</div>

							<div class="row blog-2">
								<div class="col-lg-3 col-sm-2">
									<div class="blogimg"><img src="images/11.jpg" alt=""></div>
								</div>
								<div class="col-lg-9 col-sm-10 col-xs-12">
									<div class="blog-title">Authentic Learning</div>
									<div class="blog-exp">
										This newer offering from Adtile uses vanilla JavaScript (no jQuery), and sets up a fixed navbar. It uses Fastclick.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div><!-- // end vision-mission -->

	<div class="our-brands">
		<div class="row">
			<div class="col-lg-9 col-md-10 col-centered">
				
				<div class="brands">
					<div class="row">
						<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 title">
							<div>Our</div>
							<div>Brands</div>
						</div><!-- // end col-lg-3 -->
						<div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
									<div class="customNavigation">
				                		<a class="prev"> <img src="images/pre.png" alt=""> </a>
				                	</div>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
									<div id="owl-demo" class="owl-carousel">
						                <div class="item">
						                	<img src="images/cambridge.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/thechildrenhouse_logo_0.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/groveschool_0.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/kindercare.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/knowledgebeginnings.jpg" alt="">
						                </div>
										<div class="item">
						                	<img src="images/learninghorizon.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/learningvision.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/odys_logo_0.png" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/patsschoolhouse.jpg" alt="">
						                </div>
						                <div class="item">
						                	<img src="images/logo-01_0.jpg" alt="">
						                </div>
						            </div>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
									<div class="customNavigation">
				                		 <a class="next"><img src="images/next.png" alt=""> </a>
									</div>
								</div>
							</div>
						</div><!-- // end col-lg-9 -->
						
						<!--  -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- // end our-brands -->

	
<?php include 'footer.php'; ?>

<!-- menu -->
<script src="js/menu/fastclick.js"></script>
<script src="js/menu/scroll.js"></script>
<script src="js/menu/fixed-responsive-nav.js"></script>
<!-- // end menu -->

<!-- brand slider -->
    <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({

      items : 5, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

      owl.trigger('owl.play',2000);



		$(".desc-content").hide();
		$(".less-more-1").hide();

		$(".learn-more-1").click(function(){
			$(".desc-content").slideDown();
			$(".learn-more-1").hide();
			$(".less-more-1").show();
		})

		$(".less-more-1").click(function(){
			$(".desc-content").slideUp();
			$(".learn-more-1").show('show');
			$(".less-more-1").hide();

		});

	

    });
    </script>

<script src="js/owl.carousel.js"></script>
<!-- // end brand slider -->

