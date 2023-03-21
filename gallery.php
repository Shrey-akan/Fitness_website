<?php include('header.php');?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/home03.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">GALLERY</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

    <!-- OUR GALLERY -->
	<div id="gallery" class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row popup-gallery gutter-5">
					<?php
                 		$sel = "SELECT * FROM gallery"; 
          				$res = mysqli_query($con,$sel);
          				while($r = mysqli_fetch_array($res))
          				{
            		?>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="admin_panel/uploads/gallery/<?php echo $r[1]; ?>" title="Gallery #1">
								<img src="admin_panel/uploads/gallery/<?php echo $r[1]; ?>" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>

					<?php }?>
				</div>
			</div>
		</div>
	</div>

<?php include('footer.php');?>