<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

// Fetch user data from database based on username stored in session
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username']; // Ensure 'username' matches the column name in your database
} else {
    // Handle case where user data is not found (should not happen if session is valid)
    echo "User data not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

   <a href="teacherhome.php" class="logo"><span style="font-weight: bold;">Learn</span><span style="color: #b34688; font-weight: bold;">Stream</span></a>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <h3 class="name"><?php echo $username; ?></h3>
            <p class="role">Teacher</p>
            <a href="teacherprofile.php" class="btn">View Profile</a>
            <div class="flex-btn">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <a href="login.php" class="option-btn">login</a>
                    <a href="register.php" class="option-btn">register</a>
                <?php else : ?>
                    <a href="login.php" class="option-btn">logout</a>
                <?php endif; ?>
            </div>
        </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
        <img src="images/pic-1.jpg" class="image" alt="">
        <h3 class="name"><?php echo $username; ?></h3>
        <p class="role">Teacher</p>
        <a href="teacherprofile.php" class="btn">View Profile</a>
    </div>

   <nav class="navbar">
      <a href="teacherhome.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="teacherabout.php"><i class="fas fa-question"></i><span>About</span></a>
      <!-- <a href="teachercourses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a> -->
      <!-- <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a> -->
      <a href="teachercontact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>

</div>

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="enter your number" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Phone Number</h3>
         <a href="tel:8249325256">8249325256</a>
         <a href="tel:9876543210">9876543210</a>
         <a href="tel:9123456789">9123456789</a>
         <a href="tel:8765432109">8765432109</a>
         <a href="tel:9988776655">9988776655</a>
         <a href="tel:7077456854">7077456854</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Address</h3>
         <a href="mailto:sampathmahapatra9@gmail.com">sampathmahapatra9@gmail.com</a>
         <a href="mailto:abhihas@gmail.com">abhihas@gmail.com</a>
         <a href="mailto:arun.behera.71619@gmail.com">arun.behera.71619@gmail.com</a>
         <a href="mailto:sanjibrajsahoo@gmail.com">sanjibrajsahoo@gmail.com</a>
         <a href="mailto:chittarth@gmail.com">chittarth@gmail.com</a>
         <a href="mailto:shrutirekhapatel@gmail.com">shrutirekhapatel@gmail.com</a>
      </div>

   </div>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>