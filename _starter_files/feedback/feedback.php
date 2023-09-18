<?php include 'inc/header.php'; ?>

<?php
  $sql = 'SELECT * FROM feedback1';
  $result = mysqli_query($conn,$sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

   
    <h2>Feedback</h2>
    <?php if (empty($feedback)):?>
      <p>There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item):?>
      <div class="card my-3">
        <div class="card-body">
          <?php echo $item['feedback'];?>
          <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

 <?php include 'inc/footer.php';?>;
