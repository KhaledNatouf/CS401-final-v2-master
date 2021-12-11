<?php
if( isset($_POST['Entry'] ) && isset( $_POST['textentry'] ) && isset( $_POST['title'] ) )
{

    $lines = file('blogEntries.txt');
    $lineNumber = count(file($filename));
    $txt = $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    $replace = $_POST['Entry'];
    $count = 0;
    $sh=fopen('blogEntries.txt', 'r'); //current file
    $th=fopen('editingFile.txt', 'w'); // new temporary file
    while (!feof($sh)) {
        $line=fgets($sh);
        if ($count == $replace) {
            $line=$txt;
        }
        fwrite($th, $line);
        $count++;
    }

    fclose($sh);
    fclose($th);

    unlink('blogEntries.txt');
    rename('editingFile.txt', 'blogEntries.txt');
    echo '<script type="text/javascript">'; 
    echo 'alert("New record created successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
?>

