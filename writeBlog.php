<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Homepage</title>
</head>
<body>  
<?php

if( isset($_POST['title'] ) && isset( $_POST['textentry'] ) )
{
    $txt= $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    file_put_contents('blogEntries.txt', $txt, FILE_APPEND);
}
echo '<script type="text/javascript">'; 
echo 'alert("New blog created successfully");'; 
echo 'window.location.href = "index.php";';
echo '</script>';

?>

</body>

<script src="js/main.js"></script>

</html>
