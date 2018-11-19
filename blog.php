<?php
  if (isset($_POST["title"])){
      if (isset($_POST["contents"])) {
        $filename =$_POST["title"] . date("Y-M-D-h-m-s") . ".txt";
        $filecontent ="blog content: " . $_POST["contents"];
        file_put_contents($filename, $filecontent);
        echo "<h1>File was created</h1>";
      }else {
        echo "Blog Content missing";
      }
  } else {
    echo "Title missing";
  }
?>
