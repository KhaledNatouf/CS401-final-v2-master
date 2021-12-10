<?php
if( isset($_POST['Entry'] ) && isset( $_POST['textentry'] ) && isset( $_POST['title'] ) )
{

    $lines = file('blogEntries.txt');
    $lineNumber = count(file($filename));
    $txt = $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    $replace = $_POST['Entry'];
    $result = '';
    $count = 0;

    $source='blogEntries.txt';
    $target='editingFile.txt';

    $sh=fopen($source, 'r');
    $th=fopen($target, 'w');
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

    unlink($source);
    rename($target, $source);
    echo '<script type="text/javascript">'; 
    echo 'alert("New record created successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
?>

