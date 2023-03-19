<?php include 'inc/header.php'; ?>

<?php
// we wanna fetch from the database

?>

<h2>Past Feedback</h2>
<!-- the way we work with if else php inside html -->
<?php if (empty($feedback)) : ?>
  <p class="lead mt3"> There is no feedback</p>
<?php endif; ?>


<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>