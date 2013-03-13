<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<?php echo $this->Html->charset(); ?>
	<title>
		The Gosse Foundation :
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
	?>
	<meta name="author" content="Azurite Design"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/parallax-slider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!--[if IE 9]>
      <link href="css/styleie9.css" rel="stylesheet">
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Navbar -->
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
	          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</a>
					<a class="brand" href=""><i class="ico-snowflake circle"></i>gosse<span>FOUND</span>.</a>
	          		<div class="nav-collapse collapse">
	            		<ul class="nav">
	              			<li><a href="">Home</a></li>
							<li class="dropdown">
	                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">About the Foundation<b class="caret"></b></a>
	                			<ul class="dropdown-menu">
	                  				<li><a href="">Perspective & Objective</a></li>
									<li><a href="">Our Charities</a></li>
									<li><a href="">Events Calendar</a></li>
									<li><a href="">The Staff Room</a></li>
									<li><a href="">Contact Us</a></li>
	                			</ul>
	              			</li>
							<li class="dropdown">
	                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Research<b class="caret"></b></a>
	                			<ul class="dropdown-menu">
	                  				<li><a href="">Greenhouse</a></li>
									<li><a href="">Aquaponics</a></li>
									<li><a href="">Superfoods</a></li>
									<li><a href="">Hugulkultur</a></li>
									<li><a href="sliders.html">The City</a></li>
	                			</ul>
	              			</li>
							<li class="dropdown">
	                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sponsors<b class="caret"></b></a>
	                			<ul class="dropdown-menu">
	                  				<li><a href="">Sponsor 1</a></li>
	                  				<li><a href="">Sponsor 1</a></li>
	                  				<li><a href="">Sponsor 1</a></li>
	                  				<li><a href="">Sponsor 1</a></li>
	                			</ul>
	              			</li>
							<li class="dropdown">
	                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Participate!<b class="caret"></b></a>
	                			<ul class="dropdown-menu">
	                  				<li><a href="">Job Opportunities</a></li>
	                  				<li><a href="">Affiliates Program</a></li>
	                			</ul>
	              			</li>
	            		</ul>
	          		</div>
	        	</div>
	      	</div>
			<!--end: Navbar -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Thermal Flywheel</h2>
				<p>By the use of thermal mass, heat energy can be stored to stablize greenhouse temperatures.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/twitter.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Inexpensive Glazings</h2>
				<p>Implimenting commonly found materials, cheap solutions can be found for insulating and high light efficiency.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/responsive.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>High-Density Farming</h2>
				<p>Biomimicry, aquaponics, superfoods, companion cropping. How to feed thousands per acre of planted area.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/html5.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>Hot-Compost</h2>
				<p>Water can be boiled, and greenhouses heated, using biodegrading waste with four products: CO2, Methane, Heat and Soil.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/css3.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
			
			<hr>
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<iframe style="float:right" width="420" height="315" src="http://www.youtube.com/embed/jkJAbsgYlXU" frameborder="0" allowfullscreen></iframe>
				<h3>
					The Gosse Foundation endeavors to recreate, through innovation and simulation, sustainable agriculture in Newfoundland and Labrador, and beyond. By implimenting high-density farming techniques, a new dawn will shine upon those with the courage to embrase third world solutions to first world problems.
				</h3>
        		<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
				<div style="clear:both;"></div>
      		</div>
			<!-- end: Hero Unit -->
      		
			<hr>
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="ico-briefcase ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3>Entrepreneurs!</h3>
								<p>Own a business? Get involved! Check out Participate! and see how your hand can guide our work!</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="ico-hospital  ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3>Charities!</h3>
								<p>Does your charity or tournament require resources? Perhaps we can raise money for your needs!</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="ico-leaf ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3>Innovators!</h3>
								<p>Challenge our work and correct our numbers. We can integrate you into our organization!</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
			<!-- start: Row -->
      		<div class="row">
	
				<div class="span9">
					
					<div class="title"><h3>Our Charities</h3></div>
					
					<!-- start: Row -->
		      		<div class="row">
			
						<div class="span3">
	
							<div class="picture">
								<a href="http://www.heartandstroke.nf.ca/site/c.inKLKTOwHoE/b.3654439/k.F8C1/Heart_Disease_Stroke_and_Healthy_Living.htm" title="Heart & Stroke Foundation" target="_blank">
									<img src="http://www.heartandstroke.nf.ca/atf/cf/%7BC4E49B23-69E6-45EB-B5F1-D4333E366D9A%7D/HSFLOGO.gif" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">Heart & Stroke Foundation</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
					
        				</div>
			
						<div class="span3">
	
							<div class="picture">
								<a href="http://www.cancer.ca/newfoundland-labrador.aspx" title="Canadian Cancer Society" target="_blank">
									<img src="http://www.cancer.ca/~/media/CCS/Global/Design/Splash%20Logo/CCS%20Splash%20Logo.ashx?as=0&dmc=0&h=96&thn=0&w=211" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">Canadian Cancer Society</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
					
        				</div>
			
						<div class="span3">
	
							<div class="picture">
								<a href="http://www.autism.nf.net/" title="Autism Society of NL" target="_blank">
									<img src="http://www.autism.nf.net/wp-content/themes/autismsociety/images/logo.png" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">Autism Society of NL</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
					
        				</div>
			
						<div class="span3">
	
							<div class="picture">
								<a href="http://www.redcross.ca/article.asp?id=6121&tid=064" rel="image" title="Canadian Red Cross">
									<img src="http://www.redcross.ca/crc2008/images/logo.gif" target="_blank" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">Canadian Red Cross</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
					
        				</div>
			
						<div class="span3">
	
							<div class="picture">
								<a href="http://www.janewayfoundation.nf.ca/" title="Janeway Children's Hospital Foundation">
									<img src="http://www.janewayfoundation.nf.ca/wp-content/themes/janeway/images/logo.png" target="_blank" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">Janeway Children's Hospital Foundation</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
					
        				</div>
			
						<div class="span3">
	
							<div class="picture">
								<a href="http://grenfell.mun.ca/Pages/default.aspx" title="Speaker Name">
									<img src="http://grenfell.mun.ca/Style%20Library/Grenfell/logo.png" target="_blank" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">Grenfell Memorial University</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
					
        				</div>
					
        			</div>
					<!-- end: Row -->

				</div>

        		<div class="span3">
					
					<!-- start: Testimonials-->

					<div class="testimonial-container">

						<div class="title"><h3>Testimonials</h3></div>

							<div class="testimonials-carousel" data-autorotate="3000">

								<ul class="carousel">

									<li class="testimonial">
										<div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author">Lucas Luck, <span>CEO</span></div>
									</li>

									<li class="testimonial">
										<div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author">Lucas Luck, <span>CTO</span></div>
									</li>

									<li class="testimonial">
										<div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author">Lucas Luck, <span>COO</span></div>
									</li>

									<li class="testimonial">
										<div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author">Lucas Luck, <span>CMO</span></div>
									</li>

								</ul>

							</div>

						</div>

					<!-- end: Testimonials-->
					
        		</div>

      		</div>
			<!-- end: Row -->
			
			<hr>
		
			<!-- start Clients List -->	

			<div class="title"><h3>Sponsors</h3></div>
			<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>
					<li><img src="img/logos/1.png" alt=""/></li>
					<li><img src="img/logos/2.png" alt=""/></li>	
					<li><img src="img/logos/3.png" alt=""/></li>
					<li><img src="img/logos/4.png" alt=""/></li>
					<li><img src="img/logos/5.png" alt=""/></li>
					<li><img src="img/logos/6.png" alt=""/></li>
					<li><img src="img/logos/7.png" alt=""/></li>
					<li><img src="img/logos/8.png" alt=""/></li>
					<li><img src="img/logos/9.png" alt=""/></li>
					<li><img src="img/logos/10.png" alt=""/></li>	
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<i class="ico-snowflake circle"></i>gosse<span>FOUND</span>.
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="">Start</a></li>

							<li><a href="">About</a></li>

							<li><a href="">Registration</a></li>

							<li><a href="">Marketing</a></li>
							
							<li><a href="">Facilities</a></li>
							
							<li><a href="">Speakers</a></li>
							
							<li><a href="">The City</a></li>
							
							<li><a href="">Sponsors</a></li>
							
							<li><a href="">Events</a></li>
							
						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>About Gosse Foundation</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Photo Stream (flickr)</h3>
					<div class="flickr-widget">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
						<div class="clear"></div>
					</div>
					
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us! (add remove services as requested)</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
					<form id="newsletter">
						<h3>Newsletter</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form>
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<div class="span12">
				<p>
					&copy; 2013 <a href="">azuriteDesign</a>.
				</p>
			</div>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.imagesloaded.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script src="js/fancybox.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>




	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('sql_dump'); ?>