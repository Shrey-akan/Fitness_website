<?php include('header.php');?>
		<!-- BANNER -->
	<div class="section banner-page" data-background="images/home03.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">MEMBERSHIP</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">MEMBERSHIP</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
<div class="section bg-primary">
		<div class="content-wrap py-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">MEMBERSHIP TYPES</h3>
							<p class="mb-0">"We have various membership types to suit your requirement. You will get the most value from fitness when it's part of your everyday life. That's why we offer a 6-month membership as standard. We also have short-term options available to get started with. Please Join us for membership types and prices.</p>
							
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info bordered">
							<h3 class="title">WAYS TO PAY</h3>
							<p class="mb-0">You can pay for your membership as a monthly recurring payment or lump sum. You can also choose the date you want your membership to start, so you’ll only pay from your first session onwards."</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">RECOMMEND US TO A FRIEND</h3>
							<p class="mb-0">Training with a friend or family is fun. And evidence shows that it keeps you motivated to you. If a friend/friend joins on your recommendation, you and your new training buddy benefit.</p>
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

				<div class="row mb-5">
						
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
	<!-- SUCCESS STORIES -->
	<div class="section bgi-cover-center" data-background="images/story-bg.jpg" >
		<div class="content-wrap">
			<div class="container" style="padding-bottom: 20px;">
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
<?php include('footer.php');?>