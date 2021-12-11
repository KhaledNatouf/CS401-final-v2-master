<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/delete.css">
  <title>Delete page:</title>
</head>
<body>
<body>  
<?php 
  echo "<div class='head'> ";
  echo "<div class='title'>Echo Blogger</div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'></div>";
  echo "<div class='item'><a href='index.php'>Home</div>";
  echo "<div class='item'><a href='newBlog.php'>Create</a></div>";
  echo "<div class='item'><a href='editBlog.php'>Edit</a></div>"; 
  echo "</div>";
  echo "<h1 style='text-align:center'> Welcome to bloggers deletepage:</h1>"; 
  echo "<h2>This page allow you to delete old entries</h2>";
?> 
<?php
if( isset($_POST['Entry'] ))
{
    $FileLines = file('blogEntries.txt');
    $lineNumber = count(file($filename));
    $replace = $_POST['Entry'];
    $count = 0;
    $fh=fopen('blogEntries.txt', 'r');
    $fout=fopen('editingFile.txt', 'w');
    while (!feof($fh)) {
        $line=fgets($fh);
        if ($count == $replace) {
            $line="";
        }
        fwrite($fout, $line);
        $count++;
    }

    fclose($fh);
    fclose($fout);

    unlink('blogEntries.txt');
    rename('editingFile.txt', 'blogEntries.txt');
    echo '<script type="text/javascript">'; 
    echo 'alert("Your blog was deleted successfully!");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}

?>
<h1> Delete </h1>
<?php

$filename = "blogEntries.txt";
$lineNumber = count(file($filename));

echo "<form action=\"deleteBlog.php\"style=\"text-align:center\" method=\"POST\">";
echo "<select name=\"Entry\"> id=\"Entry\">";

for($i = 0; $i < $lineNumber; $i++){
    $x = $i + 1;
    echo "<option value=$i>Entry $x</option>";
}
echo "</select>";
echo "<p><input type=\"submit\" value=\"Submit\"></p>";
echo "</form>";

?>
</body>
</html>