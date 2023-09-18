<?php
$arr = [1,2,3,4,5,6];

// print_r($arr) ;
// print_r($arr[1]) ;
// $popped_arr= array_pop($arr);
// print_r($popped_arr);
// print_r($arr);
$numbers = range(1,20);
$newNumbers = array_map(function ($number) {
    return "index ${number}";
  }, $numbers);

  print_r($newNumbers);