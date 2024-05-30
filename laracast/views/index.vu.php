<?php require "./partials/nav.php";  ?>

<?php require "./partials/banner.php"  ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h3>itx my Home page\</h3>
      <p>hello, <?php echo $_SESSION['user']['email'] ?? 'Guest' ?>. wellcome to home page   </p>
    </div>
  </main>
</div>

<?php
 require"./partials/footer.php";
  ?>