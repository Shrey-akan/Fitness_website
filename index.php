<?php include('header.php');?>
	<!-- BANNER -->
    <div id="oc-fullslider" class="banner">
    	<div class="owl-carousel owl-theme full-screen">
    	<?php
          $sel = "SELECT * FROM silder"; 
          $res = mysqli_query($con,$sel);
          while($r = mysqli_fetch_array($res))
          {
            ?>
	    	<div class="item">
	        	<img src="admin_panel/uploads/silder/<?php echo $r[4]; ?>" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container d-flex align-items-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading"><?php echo $r[1]; ?></h1>
	            		<p class="caption-subheading"><?php echo $r[2]; ?></p>
		                <p><?php echo $r[3]; ?></p>
		                <a href="#" class="btn btn-primary">CONTACT NOW</a>
		            </div>   
	            </div>
	    	</div> 
	        <?php }?>
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </div>
    <!-- SHORTCUT -->
	<div class="section services">
		<div class="content-wrap pb-0">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="row no-gutters overlap">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<?php
         						$sel = "SELECT * FROM offer"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
								<!-- BOX 1 -->
								<div class="rs-feature-box-1 bg-primary" data-background="images/promo2.png">
									<div class="title">JOIN MEMBER NOW!!<br><?php echo $r[1]; ?></div>
									<div class="body">
										<p><?php echo $r[2]; ?></p>
										<a href="#" class="btn btn-secondary">CONTACT NOW</a>
										<div class="clearfix"></div>
									</div>
					            </div>
					            <?php }?>
							</div>

							<div class="col-sm-12 col-md-12 col-lg-6">
								<!-- BOX 2 -->
								<div class="rs-feature-box-1" data-background="images/promo1.jpg">
									<div class="title" style="color:black:#0000;">OPENING HOURS!<br>CHECK OUR CLASSES HERE</div>
									<div class="body">
										<div class="row" style="color: black;font-weight: bold;">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6">
												<div class="row" >
													<div class="col-6">WEEKDAY</div>
													<div class="col-6"> : 08:45 - 21:00</div>
												
													<div class="col-6">SATURDAY</div>
													<div class="col-6"> : 10:00 - 23:00</div>
												
													<div class="col-6">FRIDAY</div>
													<div class="col-6"> : CLOSE</div>
												</div>
											</div>
										</div>
										<div class="spacer-10"></div>
										<a href="classes.php" class="btn btn-primary">CLASSES HERE</a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			

	<!-- ABOUT OUR GYM -->
	<div id="about" class="section">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">
						<h2 class="section-heading mb-7">
							WELCOME TO FITX
						</h2>
						<p>The best in the fitness world. Join our gym and receive exclusive discounts on memberships, personal training. We have everything you need to build your body and physique in one place. We can help you achieve whatever you set out to achieve in life.</p>
						<div class="spacer-30"></div>
						<div class="row">
							<!-- Item 1 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-thumbs-up"></i>
									</div>
									<div class="body-content">
										<h4>Happy Environment</h4>
										<p>We provide a happy and healthy environment in our gym. we provide neet and clean rooms. gyming area and also we provide FULLY air conditioning area in our gym.</p>
									</div>
								</div>
							</div>
							<!-- Item 2 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="body-content">
										<h4>Qualified Instructor</h4>
										<p>In Our gym, we are hiring experienced and qualified gym Instructors. and also we provide personal qulified Instructor for our customers.</p>
									</div>
								</div>
							</div>
							<!-- Item 3 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-briefcase"></i>
									</div>
									<div class="body-content">
										<h4>High Tech Gym</h4>
										<p>Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
									</div>
								</div>
							</div>
							<!-- Item 4 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-users"></i>
									</div>
									<div class="body-content">
										<h4>Happy Members</h4>
										<p>In our gym, all members are happily satisfied with our facilities and instructor.</p>
									</div>
								</div>
							</div>
						</div>

					</div>

			</div>
		</div>
	</div>

	<!-- CLASS -->
	<div id="classes" class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4">
							OUR CLASSES
						</h2>
						<p class="subheading text-center mb-5">The best in the fitness world. Join our gym and receive exclusive discounts on memberships, personal training. We have everything you need to build your body and physique in one place.</p>
					</div>
				</div>

				<div class="row mt-4">
					<?php
         						$sel = "SELECT * FROM class"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="admin_panel/uploads/class/<?php echo $r[4];?>" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title"><?php echo $r[1]; ?></div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> <?php echo $r[2]; ?></div>
									<div class="col"><i class="fa fa-calendar-o"></i><?php echo $r[3]; ?></div>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>

	<!-- SUCCESS STORIES -->
	<div class="section bgi-cover-center" data-background="images/story-bg.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4">
							SUCCESS STORIES
						</h2>
					</div>
					
				</div>
				<div class="row">
				
					<div class="col-sm-12 col-md-10 offset-md-1">
					
						<div class="owl-carousel owl-theme testimonial-caro">
						<?php
         						$sel = "SELECT * FROM story"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
							<!-- Item 1 -->
							<div class="item">
								<div class="rs-box-testimony text-white">
									<div class="quote-box">
										<blockquote class="quote"><?php echo $r[1]; ?></blockquote>
										<p class="quote-name"><?php echo $r[2]; ?></p>                        
									</div>
								</div>
							</div>
							<?php } ?>
						</div>

					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- CLIENTS -->
<div class="section bg-primary">
		<div class="content-wrap py-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">GYM</h3>
							<p class="mb-0">"Gym is essentially a large room, building, or club with a variety of specialized equipment for people to exercise and grow muscle. Let’s join the best gym in our gym.</p>
							
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info bordered">
							<h3 class="title">YOGA CLASSES</h3>
							<p class="mb-0">Yoga is a spiritual exercise that focuses on bringing peace between mind and body. Different styles of yoga contain physical postures and meditation.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">CARDIO CLASSES</h3>
							<p class="mb-0">Cardio is a rhythmic exercise or activity that basically focuses on raising the heart rate to a target heart rate, to burn fat and calories. So begin your cardio training with us.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- OUR PACKAGES -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							OUR PACKAGES
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

				</div>

				<div class="row mt-5">
						
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-pricing-1 bg-primary-1 mb-5">
						  <img src="images/package-1.jpg" alt="" class="img-fluid">
						  <div class="blok-title">
				              <h3 class="title">BEGINNER</h3>
				              <div class="price"> $10<span>/month</span> </div> 
						  </div>
			              <div class="features">
			                <ul>
			                  <li>2 Day a Week</li>
			                  <li>GYM Access & Equipment</li>
			                  <li>Get Suplement</li>
			                  <li>Personal Trainers</li>
			                  <li>Diet Guides</li>
			                </ul>
			              </div>
			              <div class="action">
			                <a href="#" class="btn btn-secondary">JOIN FORCE</a>
			              </div>
			            </div>
					</div>

					<!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-pricing-1 bg-primary-1 mb-5">
						  <img src="images/package-2.jpg" alt="" class="img-fluid">
						  <div class="blok-title">
				              <h3 class="title">ADVANCED</h3>
				              <div class="price"> $20<span>/month</span> </div> 
						  </div>
			              <div class="features">
			                <ul>
			                  <li>2 Day a Week</li>
			                  <li>GYM Access & Equipment</li>
			                  <li>Get Suplement</li>
			                  <li>Personal Trainers</li>
			                  <li>Diet Guides</li>
			                </ul>
			              </div>
			              <div class="action">
			                <a href="#" class="btn btn-secondary">JOIN FORCE</a>
			              </div>
			            </div>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-pricing-1 bg-primary-1 mb-5">
						  <img src="images/package-3.jpg" alt="" class="img-fluid">
						  <div class="blok-title">
				              <h3 class="title">PROFESSIONAL</h3>
				              <div class="price"> $25<span>/month</span> </div> 
						  </div>
			              <div class="features">
			                <ul>
			                  <li>2 Day a Week</li>
			                  <li>GYM Access & Equipment</li>
			                  <li>Get Suplement</li>
			                  <li>Personal Trainers</li>
			                  <li>Diet Guides</li>
			                </ul>
			              </div>
			              <div class="action">
			                <a href="#" class="btn btn-secondary">JOIN FORCE</a>
			              </div>
			            </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section bgi-cover-center" data-background="images/queto.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
						<div class="text-center">
							<h2 class="text-primary"><em>GET FIT IN LESS 2 WEEKS WITH FITX</em></h2>
							<p class="mb-5">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien</p>
							<a href="contact.php" class="btn btn-primary">CONTACT NOW</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


<?php include('footer.php');?>

