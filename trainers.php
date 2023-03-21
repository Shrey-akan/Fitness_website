<?php include('header.php');?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/home03.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">TRAINERS</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Trainers</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
    <!-- OUR TRAINERS -->
	<div id="trainers" class="section">
		<div class="content-wrap">
			<div class="container">
			<div class="row">
				<?php
         						$sel = "SELECT * FROM trainer1"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4">
							<?php echo $r[1];?>
						</h2>
						<p class="subheading text-center mb-5"><?php echo $r[2];?></p>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<?php
         						$sel = "SELECT * FROM trainer"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="admin_panel/uploads/trainer/<?php echo $r[6];?>" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title"><?php echo $r[1];?></div>
								<div class="detail">
									<div class="col"><?php echo $r[2];?></div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
											<a href="<?php echo $r[3];?>"><i class="fa fa-facebook"></i></a> 
											<a href="<?php echo $r[4];?>"><i class="fa fa-twitter"></i></a> 
											<a href="<?php echo $r[5];?>"><i class="fa fa-instagram"></i></a> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>	
				</div>

			</div>
		</div>
	</div>
<?php include('footer.php');?>