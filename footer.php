<div class="section bg-primary">
		<div class="content-wrap py-3">
			<div class="container">
				<div class="row">
					<?php
         						$sel = "SELECT * FROM footer1"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">EMAIL</h3>
							<p class="mb-0"><a href="<?php echo $r[1];?>"><?php echo $r[1];?></a></p>
							
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info bordered">
							<h3 class="title">CALL US NOW!</h3>
							<h2>+<?php echo $r[2];?></h2>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">ADDRESS</h3>
							<p><?php echo $r[3];?></p>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"  data-background="images/footer-bg.jpg">

		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<?php
         						$sel = "SELECT * FROM footer_about"; 
          						$res = mysqli_query($con,$sel);
          						while($r = mysqli_fetch_array($res))
         						 {
            						?>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="text-center">
							<img src="admin_panel/uploads/logo/<?php echo $r[5];?>" alt=""  style="height:90px" class="mb-5"><br>
							<div class="row">
					<div class="col-sm-12 col-md-12">
						
						<p class="subheading text-center" style="color:#cd7817;"><?php echo $r[1];?></p>
					</div>
				</div>
							<div class="sosmed-icon d-inline-flex">
								<a href="<?php echo $r[2];?>"><i class="fa fa-facebook"></i></a> 
								<a href="<?php echo $r[3];?>"><i class="fa fa-twitter"></i></a> 
								<a href="<?php echo $r[4];?>"><i class="fa fa-instagram"></i></a> 
 
							</div>
						</div>
					</div>	
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2023 &copy; <span class="color-primary">Fitness & Gym Website</span>. Designed by <span class="color-primary" ><a href="https://windinsolutions.com/">Windin Solutions</a></span></p> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>
</body>
</html>