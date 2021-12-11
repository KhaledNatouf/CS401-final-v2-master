<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/newPost.css">
  <title>New post page:</title>
</head>
<body >
<?php 
  echo "<div class='newPostContainer'> ";
  echo "<div class='title'>Echo Blogger</div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'><a href='index.php'>Home</div>";
  echo "<div class='item'><a href='editBlog.php'>Edit</a></div>";
  echo "<div class='item'><a href='deleteBlog.php'>Delete</a></div>";
  echo "</div>";
  echo "<h1 style='text-align:center'> Welcome to bloggers create post page:</h1>"; 
  echo "<h2>This page allows you to create new entries.</h2>";
  
  ?> 
<?php
echo "<div class ='writeContainer'>";
echo "<form method='POST' action='writeBlog.php' style='text-align:center' >";
echo"<p>";
echo"<label for='title'>Title:</label>";
echo"<input type='text' id='title' name='title' placeholder='Enter your title please!'>";
echo" </p>";
echo"<p>";
echo"<label for='textentry'>Text:</label>";
echo"<textarea id='textentry' name='textentry' placeholder='Please enter your post here' rows='20' cols='90'></textarea>";
echo"</p>";
echo"<p>";
echo"<input type='submit' value='Submit'>";
echo"</p>";
echo"</form>";
echo"</div>";
?>

</body>
</html>