<?php
session_start();
if (isset($_POST['submit'])) {
    $username = filter_input(
      INPUT_POST,
      'username',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    $password = filter_input(
      INPUT_POST,
      'password',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    if ($username=='ali' && $password=='password') {
        $_SESSION['username']=$username;
        header('location:./extras/dashboard.php');
    }
}
  
?>


 <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>