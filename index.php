<?php
session_start();

$current_user = false;

if (isset($_SESSION["user"])){
  if (isset($_GET["logout"])){
    $_SESSION = [];
    session_destroy();
  }
  else{
    $current_user = $_SESSION["user"];
  }
}
else if (isset($_GET["user"]) && $_GET["user"] == "benjamin"){
  $current_user = $_GET["user"];
  $_SESSION["user"] = $current_user;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($current_user){
      echo "<p>Hello " . $current_user . "</p>";
      echo "<a href='login-session.php?logout'>Log out</a>" . "<br>" . "<br>";
      echo "<form action='blog.php' method='post'>";
      echo "Title: <input type='text' name='title' placeholder='blog title'>" . "<br>";
      echo "<textarea name='contents' rows='10' cols='80'></textarea>" . "<br>";
      echo "<input type='submit' value='Send'>";
      echo "</form>";
    } else{
      echo "Login to post blog content" . "<br>";
      echo "<form action='login-session.php' method='GET'>";
      echo "  <input type='text' placeholder='username' name='user'>";
      echo "  <input type='text' placeholder='password' name='password'>";
      echo "  <input type='submit' value='Log in'>";
      echo "</form>";
      echo "hint: the username is benjamin";
    }
    ?>
  </body>
</html>
