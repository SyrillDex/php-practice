<?php 
  include("database.php");
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
  <link rel="stylesheet" href="css/index.css">
  <title>Instagram</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <div class="login-form">
      <h3>Instagram</h3>
      <input type="text" name="username" placeholder="Phone number, username, email" class="form-input">
      <input type="password" name="password" placeholder="Password" class="form-input">
      <input type="submit" name="login" value="Sign up" class="login-button">
      <p class="or">OR</p>
      <p class="facebook"><i class="fa-brands fa-square-facebook fa-lg" style="color: #1a66ff;"></i> 
      <a href="#" >Sign up with Facebook</a></p>
    </div>
    <div class="sign-up">
        <p>Have an account? <a href="index.php">Log in</a></p>
    </div>
  </form>
</body>
</html>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
      echo "Please enter username";
    }
    elseif(empty($password)){
      echo "Please enter password";
    }
    else{
      // $hash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

      try{
        mysqli_query($conn, $sql);
        header("Location: index.php");
      }
      catch(mysqli_sql_exception){
        echo "username already taken";
      }
    }
  }
  mysqli_close($conn);
?>