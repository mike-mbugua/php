<!-- sessions unlike cookies they are stored in the server and they can be used across mutiple pages.We use sessions to store information in variables
 -->
 <!-- $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_EMAIL); we do not sanitize password -->

 <?php
 session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $password = $_POST['password'];

if ($username == 'mike' && $password == "pass123") {
    # code...
    $_SESSION['username'] = $username;
    header('Location: /crash-course/extras/dashboard.php');
}else {
    echo 'incorrect password/username';
}
} ?>



 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div>
        <label for="username">username:</label>
        <input type="text" name="username">
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="submit" name="submit"> 
</form>