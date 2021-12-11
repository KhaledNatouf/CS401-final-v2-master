<?php
if( isset($_POST['Entry'] ) && isset( $_POST['textentry'] ) && isset( $_POST['title'] ) )
{

    $fileLines = file('blogEntries.txt');
    $lineNumber = count(file($filename));
    $txt = $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    $replace = $_POST['Entry'];
    $count = 0;
    $fh=fopen('blogEntries.txt', 'r'); //current file
    $fout=fopen('editingFile.txt', 'w'); // new temporary file
    while (!feof($fh)) {
        $line=fgets($fh);
        if ($count == $replace) {
            $line=$txt;
        }
        fwrite($fout, $line);
        $count++;
    }

    fclose($fh);
    fclose($fout);

    unlink('blogEntries.txt');
    rename('editingFile.txt', 'blogEntries.txt');
    echo '<script type="text/javascript">'; 
    echo 'alert("New record created successfully");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
?>

