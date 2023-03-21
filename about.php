<?php include('header.php');?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/home03.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">ABOUT US</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">About Us</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
    <!-- ABOUT OUR GYM -->
	<div id="about" class="section bg-gray-light">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">
					<?php
         						$sel = "SELECT * FROM about1"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>

					<div class="col-sm-12 col-md-12 col-lg-6">
						<h2 class="section-heading mb-4"><?php echo $r[1];?></h2>
						<p style="text-align: justify;"><?php echo $r[2];?></p>
						<div class="spacer-30"></div>						
						<div class="spacer-30"></div>

					</div>

					<div class="col-sm-12 col-md-12 col-lg-6">
						
						<img src="admin_panel/uploads/about1/<?php echo $r[3];?>" alt="" class="img-fluid shadow-lg">

					</div>
				<?php } ?>	
				</div>
				
				<div class="clearfix"></div>
				<div class="spacer-70"></div>

			</div>
		</div>
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
									<div class="title">JOIN MEMBER NOW!<br><?php echo $r[1]; ?></div>
									<div class="body">
									<p><?php echo $r[2]; ?></p>
										<a href="#" class="btn btn-secondary">CONTACT NOW</a>
										<div class="clearfix"></div>
									</div>
					            </div>
					            <?php } ?>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<!-- BOX 2 -->
								<div class="rs-feature-box-1" data-background="images/promo1.jpg">
									<div class="title">OPENING HOURS!<br>CHECK OUR CLASSES HERE</div>
									<div class="body">
										<div class="row" style="color: black;font-weight: bold;">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6">
												<div class="row">
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

	<!-- WHY CHOOSE US? -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4">
							Why Choose Us?
						</h2>
						
					</div>
					
				</div>
				
				<div class="row">
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
							<img src="images/why choose us/social-network.png" style="height: 40px;">
								<!-- <i class="fa fa-thumbs-up"></i> -->
							</div>
							<div class="body-content">
								<h4>Happy Environment</h4>
								<p>We provide a happy and healthy environment in our gym. we provide neet and clean rooms. gyming area and  we provide Fuly air conditioning area </p>
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<!-- <i class="fa fa-trophy"></i> -->
								<img src="images/why choose us/trophy.png" style="height: 40px;">
							</div>
							<div class="body-content">
								<h4>Qualified Instructor</h4>
										<p>In Our gym, we are hiring experienced and qualified gym Instructors. and also we provide personal qulified Instructor for our customers.</p>
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<!-- <i class="fa fa-briefcase"></i> -->
								<img src="images/why choose us/briefcase.png" style="height: 40px;">
							</div>
							<div class="body-content">
								<h4>High Tech Gym</h4>
								<p>Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
							</div>
						</div>
					</div>
					<!-- Item 4 -->
					<div class="col-sm-12 col-md-6 col-lg-3 mb-4">
						<div class="box-icon-1 text-center">
							<div class="icon">
								<!-- <i class="fa fa-users"></i> -->
								<img src="images/why choose us/user.png" style="height: 40px;">
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

<?php include('footer.php');?>