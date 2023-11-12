<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/user_page.css">
   <link rel="stylesheet" href="css/sidebar.css">
   <!-- <link rel="stylesheet" href="css/dropmenu.css"> -->
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    .sidebar{
      position: fixed;
      margin-top: 65px;
      z-index: 1;
    }
    
   .hero-video {
  position: relative;
  height: 600px;
  margin-left: 250px;
  overflow: hidden;
  z-index: 0;
}
/* .hero-video video{
  position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
} */
.hero-video #content-overlay{
  position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background-color: rgba(0, 0, 0, 0.5);
			color: #fff;
			font-size: 2rem;
			text-align: center;
			opacity: 0;
			transition: opacity 0.3s ease;
  z-index: 1;
}
.hero-video:hover #content-overlay {
			opacity: 1;
		}
.hero-video video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.container .content{
  width: 100%;
  margin-left: 230px;
  overflow: hidden;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  background-color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: black;
  border-radius: 5px;
  color: blue;
}

.dropdown:hover .dropdown-content {
  display: block;
}
  </style>
</head>
<body>
   
    <nav>
        <div class="menu">
          <div class="logo">
          <a href="admin_page.php">R.J.Gym</a>
          </div>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="diet.php">DIET-chart</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="package.html">Packages</a></li>
            <li><a href="bmi.html">BMI</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="../caf/login.php">Cafe</a></li>
            <li><a href="logout.php" class="btn">logout</a></li>
            <li><div class="dropdown">
    <button class="dropbtn">Diet-Recipes 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="as.html">Avvacado Smothie</a>
      
      <a href="ss.html">Spinch Smothie</a>
      <a href="os.html">Orange Smothie</a>
    </div>
  </div> 
    </li>
          </ul>
        </div>
      </nav>
<div class="sidebar">
<header><img src="dp1.jpg" alt="">Admin</header> 
<ul>
<br><br>
<li><a href="dashboard.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
<li><a href="insertdeleteedit/insertdeleteedit.php"><i class="fa fa-user-plus" aria-hidden="true"></i></i>New user</a></li>
<li><a href="class.html"><i class="fas fa-stream"></i>Classes</a></li>
<li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
<li><a href="about.php"><i class="fas fa-question-circle"></i>About</a></li>
<li><a href="package.html"><i class="fas fa-sliders-h"></i>Packages</a></li>
<li><a href="contact.php"><i class="fas fa-envelope"></i>Contact</a></li>
<li><a href="logout.php"><i class='fas fa-power-off'></i>Logout</a></li>
</ul>
</div>
<div class="hero-video">
  <video autoplay muted loop>
    <source src="css/ft.mp4" type="video/mp4">
    <source src="path/to/video.webm" type="video/webm">
    Your browser does not support the video tag.
  </video>
  <div id="content-overlay"><h3>Hi, <span>Admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p style="color: blue;">A good admin always keep your information secret.</p></div>
    
</div>

</div>
<div class="container">

   <div class="content">
   
   
      <?php
include('design.php');
?>

<iframe src="https://jkaho-workout-tracker.herokuapp.com/?id=6411782baa3f910020ae3d05" frameborder="0" width="1300px" height="700px"></iframe>
  <?php
include('quiz.php');
?>
<!-- Start of rjgym Zendesk Widget script --><!-- Start of rjgymhelp Zendesk Widget script --><script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=328edceb-25e3-48d5-a39e-eebabd0b8cd3"> </script><!-- End of rjgymhelp Zendesk Widget script --><!-- End of rjgym Zendesk Widget script -->
<!-- <iframe src="gallery.php" frameborder="0" width="1000px" height="700px"></iframe> -->

      <!-- <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a> -->
   </div>
  
</div>

</body>
</html>