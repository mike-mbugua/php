<?php include 'inc/header.php'; ?>

<?php 
 $name = $email = $feedback = " ";
 $nameErr = $emailErr =$feedbackErr =" ";

 if(isset($_POST['submit'])){
  // validating a name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  }else{
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // validate an email
  if (empty($_POST['email'])) {
    $emailErr = 'email is required';
  }else{
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL  );
  }

  // validate the feedback

  if (empty($_POST['feedback'])) {
    $feedbackErr = 'feedback is required';
  }else{
    $feedback = filter_input(INPUT_POST,'feedback',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }
  if (empty($nameErr) && empty($emailErr) && empty($feedbackErr)) {
    // add to database
    $sql = "INSERT INTO feedback1 (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    if (mysqli_query($conn, $sql)) {
      // success
      header('Location: feedback.php');
    } else {
      // Error
      echo 'Error: ' . mysqli_error($conn); // This line will display any SQL error messages.
      echo 'SQL Query: ' . $sql; // This line will display the SQL query for debugging.
  }
  
  }
 }


 
 ?>
    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="feedback" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
    
