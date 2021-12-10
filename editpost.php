<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/edit.css">
  <title>Edit page:</title>
</head>

<body>
<?php 
  echo "<div class='headContainer'> ";
  echo "<div class='titleItem'>Echo Blogger</div>";
  echo "<div class='headItem'></div>";
  echo "<div class='headItem'></div>";
  echo "<div class='headItem'></div>";
  echo "<div class='headItem'></div>";
  echo "<div class='headItem'></div>";
  echo "<div class='headItem'><a href='index.php'>Home</div>";
  echo "<div class='headItem'><a href='newpost.php'>Create</a></div>";
  echo "<div class='headItem'><a href='deleteentry.php'>Delete</a></div>";
  echo "</div>";
  echo"<h1>Edit page </h1>";
  echo "<h2>This page allow you to edit old entries</h2>";
  
  ?> 
<?php
    echo "<div class='writingPage'> ";

    $filename = "blogEntries.txt";
    $lineNumber = count(file($filename));
   
    
    echo "<form action=\"editentries.php\" target=\"_blank\" method=\"POST\"style=\"text-align:center\">";
    echo "<select name=\"Entry\"> id=\"Entry\">";
  
    for($i = 0; $i < $lineNumber; $i++){ 
        $x = $i + 1;     
        echo "<option value=$i > Entry $x</option>";       
    }
    echo "</select>";
    echo "<p>";
    echo "<label for=\"title\">Title:</label>";
    echo "<input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Enter new title please!\" required>";
    echo "</p>";
    echo "<p>";
    echo "<label for=\"textentry\">Text:</label>";
    echo "<textarea id=\"textentry\" name=\"textentry\" placeholder=\"Please enter new post content \" rows=\"20\" cols=\"90\" required></textarea>";
    echo "</p>";
    echo "<p><input type=\"submit\" value=\"Submit\" </p>";
    echo "</form>";
   
?>
</body>
</html>