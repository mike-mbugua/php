<?php
function inverse($x){
    if (!$x) {
        # code...
        throw new Exception('division by zero');
    }
    else {
        return 1/$x;
    };
}
// echo (inverse(0));
// by doing the above it causes the execution to be thrown and stops the script execution
 try {
    echo inverse(0);
 } catch (Exception $e) {
    //throw $th;
    echo "Caught Exception",$e -> getMessage(), ' ';
 }finally {
    echo "Second finally";
 }