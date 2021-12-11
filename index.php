<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Homepage</title>
</head>
<body>  
  <?php 
  echo "<div class='Container'> ";
  echo "<div class='title'>Echo Blogger</div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item active <a href='index.php'>Home</div>";
  echo "<div class='item'><a href='newpost.php'>Create</a></div>";
  echo "<div class='item'><a href='editpost.php'>Edit</a></div>";
  echo "<div class='item'><a href='deleteentry.php'>Delete</a></div>";
  echo "</div>";
  echo "<h1 style='text-align:center'> Welcome to bloggers homepage:</h1>"; 
  ?> 
  <?php
    $filename = "blogEntries.txt";
    $posts = fopen($filename, "r");
    if (!$posts) {
      die("Unable to open $filename.");
    }
    echo "<div class=\"blogContainer\">";
    echo "<div class=\"blogItem\" style ='clear : both'>";
    while (!feof($posts)) {
    
      $line = fgets($posts);
      $parts = explode("`", $line);
      echo "<span><h2>$parts[0]</h2> <p>$parts[1]</p>";
      echo "</span>";
      
    }
    
    fclose($posts);
    echo"</div>";
    echo"</div>";
  ?>
</body>

  <script src="js/main.js"></script>
  
</html>