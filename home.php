<?php
  if(!isset($_SESSION)){
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <title>Document</title>
</head>
<body>
  <nav class="sidebar">
    <h3>Instagram</h3>
    <a href="#"><i class="fa-solid fa-house"></i> Home</a>
    <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a href="#"><i class="fa-solid fa-compass"></i> Explore</a>
    <a href="#"><i class="fa-solid fa-clapperboard"></i> Reels</a>
    <a href="#"><i class="fa-solid fa-paper-plane"></i> Messages</a>
    <a href="#"><i class="fa-regular fa-heart"></i> Notifications</a>
    <a href="#"><i class="fa-regular fa-square-plus"></i> Create</a>
    <a href="#"><i class="fa-solid fa-circle-user"></i> Profile</a>
    <div class="bottom-nav">
      <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log out" class="logout">
        <i class="fa-solid fa-right-from-bracket"></i>
      </form>
    </div>
  </nav>
  <div class="feed">
    <div class="stories js-stories">
    </div>
    <div class="posts js-posts">
    </div>
  </div>
</body>
<script src="js/stories.js"></script>
<script src="js/posts.js"></script>
</html>

<?php 
  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
  }
?>