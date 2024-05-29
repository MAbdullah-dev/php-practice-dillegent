<?php require_once 'database.php'; ?>
<?php require "./partials/nav.php"; ?>
<?php require "./partials/banner.php"; ?>

<main class="bg-gray-100 min-h-screen">
    <div class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php
        $id = $_GET['id'];
        // Validate if ID is provided and numeric
        if (!isset($id) || !is_numeric($id)) {
            echo "<p class='text-red-500'>Invalid ID provided.</p>";
        } else {
            $query = "SELECT * FROM `laracasts note app` WHERE user_id = 1 AND id = $id"; // Correct table name if necessary
            $stmt = $database->executeQuery($query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Check if row exists and user_id is authorized
            if ($row) {
                echo "<div class='bg-white shadow-md rounded-lg p-6 mb-4'>";
                echo "<h1 class='text-2xl font-bold text-gray-900 mb-4'>" . htmlspecialchars($row['body']) . "</h1>";
                echo "</div>";
        ?>

                <!-- Delete Note Form -->
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                        Delete Note
                    </button>
                </form>

        <?php
            } else {
                echo "<p class='text-red-500'>No data found for the provided ID.</p>";
            }
        }
        ?>

        <a href="./notes" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Go Back
        </a>
        <a href="./note/edit?id=<?php echo $row['id']; ?>" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
           EDIT
        </a>
    </div>
</main>

<?php require "./partials/footer.php"; ?>