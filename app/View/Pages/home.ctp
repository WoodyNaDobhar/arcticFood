
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider"><?php 
		
			foreach($splashes as $splash){
				
				$image = $splash['Splash']['image']?'<div class="da-img"><img width="300px" height="300px" src="img/uploads/'.$splash['Splash']['image'].'" alt="'.$splash['Splash']['title'].'" /></div>':'';
				$link = $splash['Splash']['link']?'<a href="'.$splash['Splash']['image'].'" class="da-link">Read more</a>':'';
				
				echo '
			<div class="da-slide">
				<h2>'.$splash['Splash']['title'].'</h2>
				<p>'.$splash['Splash']['data'].'</p>
				'.$link.'
				'.$image.'
			</div>';
			}
		
		?>
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
		      		<div class="row"><?php 
		      		
		      			foreach($charities as $charity){
		      		
			      			echo '
				
						<div class="span3">
	
							<div class="picture">
								<a href="'.$charity['Charity']['link'].'" title="'.$charity['Charity']['name'].'" target="_blank">
									<img src="img/uploads/'.$charity['Charity']['logo'].'" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">'.$charity['Charity']['name'].'</a></h4>
								<p>'.$charity['Charity']['description'].'</p>
							</div>
					
        				</div>';
		      			}
		      		
		      		?>
					
        			</div>
					<!-- end: Row -->

				</div>

        		<div class="span3">
					
					<!-- start: Testimonials-->

					<div class="testimonial-container">

						<div class="title"><h3>Testimonials</h3></div>

							<div class="testimonials-carousel" data-autorotate="3000">

								<ul class="carousel"><?php 
		      		
		      			foreach($testimonials as $testimonial){
		      				
		      				//to make the quoter pretty...
		      				$quoterArray = explode(' ', $testimonial['Testimonial']['quoter']);
		      				$quoterLast = array_pop($quoterArray);
		      				$quoter = implode(' ', $quoterArray).' <span>'.$quoterLast.'</span>';
		      		
			      			echo '
									<li class="testimonial">
										<div class="testimonials">'.$testimonial['Testimonial']['quote'].'</div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author">'.$quoter.'</div>
									</li>';
		      			}
		      		
		      		?>

								</ul>

							</div>

						</div>

					<!-- end: Testimonials-->
					
        		</div>

      		</div>
			<!-- end: Row -->
			
			<hr>