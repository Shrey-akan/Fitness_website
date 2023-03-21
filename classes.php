<?php include('header.php');?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/home03.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">CLASSES</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Classes</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

    <!-- CLASS -->
	<div id="classes" class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
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
								<div class="title"><?php echo $r[1];?></div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i><?php echo $r[2];?></div>
									<div class="col"><i class="fa fa-calendar-o"></i><?php echo $r[3];?></div>
								</div>
							</div>
						</div>
					</div>

					<?php }?>

				</div>
			</div>
		</div>
	</div>



	<!-- CTA -->
	<div class="section bgi-cover-center" data-background="images/queto.jpg" >
		<div class="content-wrap">
			<div class="container">
				<div class="row mt-10">
					<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
						<div class="text-center">
							<h2 class="text-primary"><em>GET FIT IN LESS 2 WEEKS WITH FITX</em></h2>
							<p class="mb-5">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien</p>
							<a href="#" class="btn btn-primary">CONTACT NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	


<?php include('footer.php');?>