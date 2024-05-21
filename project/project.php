<?php require './includes/header.php'; ?>

<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
        }
    }

    if (empty($_POST['body'])) {
        $bodyErr = 'Feedback is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
      $sql="INSERT INTO `feedback_table`(`name`, `email`, `body`) VALUES ('$name','$email','$body')"; 
      if (mysqli_query($conn,$sql)) {
        header('location: ./project.php');
      }
    }
}
?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : ''; ?>" id="body" name="body" placeholder="Enter your feedback"><?php echo htmlspecialchars($body); ?></textarea>
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
  </div>
</main>

<?php require './includes/footer.php'; ?>
