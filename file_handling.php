<?php
$file='extras/users.txt';

if (file_exists($file)) {
    # code...
    // echo readfile($file); 
    $handle = fopen($file,"r");
    $contents = fread($handle,filesize($file));
    fclose($handle);
    echo $contents;
}else {
    # code...
    $handle =fopen($file, 'w');
    $contents = 'mike' . PHP_EOL .'sarah' . PHP_EOL . 'jakes';
    fwrite($handle, $contents);
    fclose($handle);
}