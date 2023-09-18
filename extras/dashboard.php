<?php
session_start();
if (isset($_SESSION['username'])) {
    # code...
    echo "<h1> Hello " . $_SESSION['username'] . "</h1>";
    echo ' <a href="logout.php">Logout</a>';
}else {
    echo 'Welcome Guest';
}
