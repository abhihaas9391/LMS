<?php
session_start();
include 'connect.php';

// Initialize default values
$name = 'Guest';
$role = '';

// Check if user is logged in as student
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['username']; // Adjust based on your column name
        $role = 'Student';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LearnStream - Home</title>

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>

<header class="header">
   <div class="flex">
      <a href="home.php" class="logo"><span style="font-weight: bold;">Learn</span><span style="color: #b34688; font-weight: bold;">Stream</span></a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="Search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="Profile Image">
         <h3 class="name"><?php echo $name; ?></h3>
         <p class="role"><?php echo $role; ?></p>
         <a href="profile.php" class="btn">View Profile</a>
         <div class="flex-btn">
            <?php if (!isset($_SESSION['username'])) : ?>
               <a href="login.php" class="option-btn">Login</a>
               <a href="register.php" class="option-btn">Register</a>
            <?php else : ?>   
               <a href="login.php" class="option-btn">Logout</a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</header>

<div class="side-bar">
   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="Profile Image">
      <h3 class="name">Abhihaas</h3>
      <p class="role">Student</p>
      <a href="profile.php" class="btn">View Profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>
</div>

<section class="home-grid">

   <h1 class="heading">Quick Options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">Likes and Comments</h3>
         <p class="likes">Total Likes : <span>25</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p class="likes">Total Comments : <span>12</span></p>
         <a href="#" class="inline-btn">View Comments</a>
         <p class="likes">Saved Playlists : <span>4</span></p>
         <a href="playlist.php" class="inline-btn">View Playlists</a>
      </div>

      <div class="box">
         <h3 class="title">Top Categories</h3>
         <div class="flex">
            <a href="#"><i class="fas fa-code"></i><span>Development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>Business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>Design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>Marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>Music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>Photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>Software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>Science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Popular Topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>JavaScript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>React</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>Bootstrap</span></a>
         </div>
      </div>


   </div>

</section>

<section class="courses">

   <h1 class="heading">Featured Courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Ananya Singh</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">HTML</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>Rohan Mehta</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">CSS</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>Kunal Desai</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">JavaScript</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Priya Patel</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Bootstrap</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>Aarav Sharma</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">SASS</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Sneha Reddy</h3>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">PHP</h3>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

   </div>

</section>

<script src="js/script.js"></script>

</body>
</html>
