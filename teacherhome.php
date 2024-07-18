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
   <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<style>
.boxs {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.boxs .add {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f0f0f0; /* Light grey background */
    /* border: 1px solid #ccc; */
    padding: 10px 20px;
    border-radius: 5px; /* Rounded corners */
    font-size: 16px;
    font-weight: bold;
    color: #333; /* Dark grey text color */
    cursor: pointer;
    /* transition: background-color 0.3s ease; */
}

.boxs .add i {
    margin-right: 8px; /* Space between icon and text */
    font-size: 20px; /* Adjust the size of the plus icon */
    color: #333; /* Same color as text */
}

.boxs .add:hover {
    background-color: #e0e0e0; /* Slightly darker grey on hover */
}

.boxs .title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}

.boxs .video-name {
    margin-bottom: 10px;
}

.boxs video {
    width: 100%;
}

</style>
<body>

<header class="header">
   <div class="flex">
      <a href="teacherhome.php" class="logo"><span style="font-weight: bold;">Learn</span><span style="color: #b34688; font-weight: bold;">Stream</span></a>

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
         <p class="role">Teacher</p>
         <a href="teacherprofile.php" class="btn">View Profile</a>
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
      <h3 class="name"><?php echo $name; ?></h3>
      <p class="role">Teacher</p>
      <a href="teacherprofile.php" class="btn">View Profile</a>
   </div>

   <nav class="navbar">
      <a href="teacherhome.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="teacherabout.php"><i class="fas fa-question"></i><span>About</span></a>
      <!-- <a href="teachercourses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a> -->
      <!-- <a href="teacherteachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a> -->
      <a href="teachercontact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>
</div>

<section class="courses">

   

   <div class="box-container">

      <!-- New File Box -->
      <div class="boxs">
         <div class="add">
            <i class="ri-add-line"></i> New File
         </div>
      </div>

      <!-- Live Class Box -->
      <div class="boxs">
         <div class="add">
            <i class="ri-add-line"></i> Live Class
         </div>
      </div>

      <br/>

      <div class="boxs">
         <h3 class="title">HTML</h3>
         <p class="video-name"></p>
         <video controls poster="images\post-1-1.png">
            <source src="images\vid-1.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>

      <!-- Remaining Course Boxes (in the same row) -->
      <div class="boxs">
         <h3 class="title">CSS</h3>
         <p class="video-name"></p>
         <video controls poster="images\post-2-1.png">
            <source src="images\vid-2.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>

      <div class="boxs">
         <h3 class="title">JavaScript</h3>
         <p class="video-name"></p>
         <video controls poster="images\post-3-1.png">
            <source src="images\vid-3.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>

      <div class="boxs">
         <h3 class="title">PHP</h3>
         <p class="video-name"></p>
         <video controls poster="images\thumb-7.png">
            <source src="images\vid-4.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>

      <div class="boxs">
         <h3 class="title">React</h3>
         <p class="video-name"></p>
         <video controls poster="images\thumb-9.png">
            <source src="images\vid-5.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>

      <div class="boxs">
         <h3 class="title">Bootstrap</h3>
         <p class="video-name"></p>
         <video controls poster="images\thumb-4.png" >
            <source src="images\vid-6.mp4" type="video/mp4">
            Your browser does not support the video tag.
         </video>
      </div>

   </div>

</section>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>
