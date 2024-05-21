<?php
if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $password = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
} ?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>