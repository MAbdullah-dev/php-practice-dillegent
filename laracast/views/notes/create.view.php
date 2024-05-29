<?php require "./partials/nav.php" ?>

<?php require "./partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/dilgent-tecnogies-internee/laracast/notes" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
            <div class="mb-4" method="POST">
                <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="note" id="note" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>

                <div>
                    <?php if (isset($errors['note'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?php echo $errors['note'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            <!-- <div class="flex items-center justify-between"> -->
            <div><input type="submit" name="submit" value="Create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"></div>

        </form>
    </div>
</main>

<?php require "./partials/footer.php" ?>