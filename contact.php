<?php include('header.php');?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/home03.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">CONTACT</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Contact</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

    <!-- CONTACT -->
	<div id="contact" class="section bg-gray">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
						
					<div class="col-sm-12 col-md-12">
						<form action="#" class="form-contact form-contact-dark" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_subject" placeholder="Subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div class="text-center">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
								</div>
							</div>
						</form>	
					</div>
					
				</div>
			</div>
		</div>
	</div>

    <!-- MAPS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="maps-wraper">
							<div id="cd-zoom-in"></div>
							<div id="cd-zoom-out"></div>
							<div id="maps" class="maps" >
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114306.48452855324!2d74.56567245046566!3d26.453226125864212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be6d8fcb7cd01%3A0xcbaf8f12eb8100ee!2sAjmer%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1672816890974!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>