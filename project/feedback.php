<?php require './includes/header.php'?>
<?php
 $sql = "SELECT * FROM `feedback_table`";
 $result = $conn->query($sql);
?>
<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Feedback</h2>
    <?php while ($row = $result->fetch_assoc()) : ?>
    <div class="card my-3 w-75 ">
     <div class="card-body text-center ">
       <?php echo $row['body'] ?>
     </div>
     <div class="text-secondary mt-2  text-center ">
            by <?php echo $row['name'] ?>
     </div>
   </div>
   <?php endwhile ?>
</main>
<?php require './includes/footer.php'?>