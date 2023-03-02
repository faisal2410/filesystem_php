<?php
$fn="D:/Faisal/ostad/php_laravel_batch1/filesystem_php/data/f1.txt";
echo getcwd();
echo PHP_EOL;
// $fp=fopen($fn,'r');
// $line=fgets($fp);
// echo $line;
// $line=fgets($fp);
// echo $line;
// $line=fgets($fp);
// echo $line;
// $line=fgets($fp);
// echo $line;
// $line=fgets($fp);
// echo $line;

// while($line=fgets($fp)){
//     echo $line;
// }
// rewind($fp);
// // fseek($fp,8);
// fseek($fp,-1,SEEK_END);
// echo PHP_EOL;
// while ( $line = fgets( $fp ) ) {
//     echo $line;
// }
// fclose($fp);

// output : D:\Faisal\ostad\php_laravel_batch1\filesystem_php

$data=file($fn);
echo $data[2];
// print_r($data);