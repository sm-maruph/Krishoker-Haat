<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>কৃষকের হাট লগইন
</title>
  <link rel="stylesheet"type="text/css" href="CSS/login.css">
</head>
<body>

  <div class="wrapper">
    <h1 class="logt">কৃষকের<span>হাট</span></h1>
    <form method="post" action="fuctions/login.php">
      <h2>লগইন</h2>
      <!-- Display errors if any -->
      <?php
      session_start();
      if (isset($_SESSION['login_errors'])) {
          $errors = $_SESSION['login_errors'];
          echo '<div class="error-message">';
          echo '<p>' . $errors['email'] . '</p>';
          echo '<p>' . $errors['password'] . '</p>';
          echo '</div>';
          unset($_SESSION['login_errors']); // Clear the errors after displaying
      }
      ?>
        <div class="input-field">
        <input type="text" name="phone" required>
        <label>আপনার ফোন নাম্বারটি প্রদান করুন</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>আপনার পাসওয়ার্ড লিখুন</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>মনে রাখুন </p>
        </label>
        <a href="http://localhost/project/forgetPassword.php">পাসওয়ার্ড ভুলে গেছেন?</a>
      </div>
      <button type="submit"type="submit" name="login">লগ ইন</button>
      <div class="register">
        <p>অ্যাকাউন্ট নেই? <a href="signuphome.php">রেজিষ্টার করুন</a></p>
      </div>
    </form>
  </div>

</body>
</html>
