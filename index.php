<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

session_start();
if(isset($_SESSION["user"])) {
  if(isset($GET_["logout"])){
    session_destro();

  }
}




?>


  </body>
</html>
