<?php require_once 'database.php'; ?>
<?php require "./partials/nav.php";  ?>

<?php require "./partials/banner.php"  ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php
    require_once 'database.php';

    // Example query
    $query = "SELECT * FROM `laracasts note app` where user_id =1"; // Correct table name if necessary

    // Execute the query
    $stmt = $database->executeQuery($query);?>

      <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <a href="./note?id=<?php echo $row['id'] ?>"><li><?php echo htmlspecialchars($row['body']) ?></li></a>
        <?php endwhile ?>
        
        <a href="./create/note" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            create note
        </a>
 
  </div>
</main>
</div>

<?php
require "./partials/footer.php";
?>