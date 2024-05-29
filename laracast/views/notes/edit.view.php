<?php require "./partials/nav.php" ?>
<?php require "./partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/dilgent-tecnogies-internee/laracast/note" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="_method" value="PATCH">
            
            <div class="mb-4">
                <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="note" id="note" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?php echo htmlspecialchars($row['body']) ?></textarea>

                <div>
                    <?php if (isset($errors['note'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?php echo htmlspecialchars($errors['note']) ?></p>
                    <?php endif ?>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <input type="submit" name="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                
                <a href="./notes" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</main>
