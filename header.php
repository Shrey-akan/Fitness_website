<?php include('connection.php');?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitness Gym</title>
    <meta name="author" content="rometheme.net"> 
	<link rel="shortcut icon" href="images/logo/logo6.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/vendor/modernizr.min.js"></script>
</head>
<body>

	<div class="animationload">
		<div class="loader"></div>
	</div>
	<a href="#" class="cd-top cd-is-visible cd-fade-out">Top</a>
    <div class="header header-1">
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
			        	<?php
          				$sel = "SELECT * FROM logo"; 
          				$res = mysqli_query($con,$sel);
          				while($r = mysqli_fetch_array($res))
          				{
            			?>
						<img src="admin_panel/uploads/logo/<?php echo $r[1];?>" alt=""  style="height:80px" />
						<?php
         				}
        				?>
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
							<li class="nav-item ">
			                    <a class="nav-link " href="index.php"  >
						          HOME
						        </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="about.php">ABOUT US</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="classes.php">CLASSES</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="trainers.php">TRAINERS</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="gallery.php">GALLERY</a>
			                </li>
			                 <li class="nav-item">
			                    <a class="nav-link" href="membership.php">MEMBERSHIP</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.php">CONTACT</a>
			                </li>
			                
			            </ul>
			            <div class="sosmed-icon float-right d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
						</div>
			        </div>
			    </nav>
			</div>
		</div>
    </div>