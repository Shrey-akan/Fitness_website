<?php 
session_start();
  include('../connection.php'); 
  if (!isset($_SESSION['admin'])) {
    header('location:index.php');
  }
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo/logo.png' />
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
            </li>
          </ul>
        </div>
        
                <ul class="navbar-nav navbar-right">
                 <?php
                     $img =$_SESSION['admin'];
                     $q = "SELECT * from admin where sno='$img'";
                     $run = mysqli_query($con,$q);
                     $res = mysqli_fetch_array($run);
                  ?>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
               
               <img alt="image" src="uploads/admin/<?php if(!empty($res[3])){ echo $res[3]; }?>" style="width: 50px;" 
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hey <?php if(!empty($res[1])){ echo $res[1];} ?></div>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo/logo.png" class="header-logo" /> <span
                class="logo-name">Fitness Gym</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="dashboard.php" class="nav-link"><i data-feather="monitor"></i><span>DASHBOARD</span></a>
            </li>
            <li class="dropdown">
              <a href="admin.php" class="nav-link"><i data-feather="user-plus"></i><span>ADMIN</span></a>
            </li>
            <li class="dropdown">
              <a href="logo.php" class="nav-link"><i data-feather="menu"></i><span>LOGO</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="home"></i><span>Home</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="silder.php">Silder</a></li>
                <li><a class="nav-link" href="offer.php">Offer Zone</a></li>
                <li><a class="nav-link" href="story.php">Success Stories</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>ABOUT US</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="about1.php">About</a></li>
                <li><a class="nav-link" href="whychooseus.php">Why Choose Us</a></li>
                <li><a class="nav-link" href="blog.html">Blog</a></li>
                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>CLASSES</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="class.php">Class Schedule</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>TRAINER</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="trainer1.php">Trainer Page Header</a></li>
                <li><a class="nav-link" href="trainer.php">Trainer Details</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="gallery.php" class="nav-link"><i data-feather="image"></i><span>GALLERY</span></a>
            </li>
             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="sidebar"></i><span>FOOTER</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="footer1.php">Footer Contact </a></li>
                <li><a class="nav-link" href="footer_about.php">Footer About</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>



          </ul>
        </aside>
      </div>