<!-- what is a cookie
cookie is where you store your clients basic information in the browser just to keep track of the user returning
 here is how you set up Cookie in php-->

 <!-- setcookie(is a method that takes in 
 1.the key you want to store inthis case name
 2.the value of the key.
 3.the duration you want to store the values in the web browser ) -->
 <?php
 setcookie("name","mbugua",time() + 86400 *30);
 if (isset($_COOKIE["name"])) {
    # code...
    echo "hello " .$_COOKIE["name"];
 };