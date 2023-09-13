<?php
echo "welcome mike";

/* in php we have different ways we can print out our messages
        1. echo - this
         is the most commonly used to print anything
        2. print - you can choose to use this method but it is upto you
        3.print_r() - this is used to print arrays ,when you try to print an array using echo you will find that it will not show the array.
        4.var_dump () -this returns the data type and also the data
        4.var_export() - when you print using this you find that the output has even the quotes
*/

// echo
echo 123;

// print
print "hello world";
// print_r()

print_r([1,2,3,4,5]);

// var_dump
var_dump([1,2,3,4,5]);

// var_export()
var_export("hello");