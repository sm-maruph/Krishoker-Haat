<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>সাইন আপ</title>
    <link rel="stylesheet" type="text/css" href="CSS/signup.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>

<body>
        <div class="signup ">
            <form id="form" method="post" action="functions/signup.php" enctype="multipart/form-data" class="inner">
                <h6 class="logt">Customers Sign Up</h6>


                <!-- To display the success message -->
                <?php
                if (isset($_SESSION['registration_success'])) {
                    echo '<div class="success-message">';
                    echo '<p>' . $_SESSION['registration_success'] . '</p>';
                    echo '</div>';
                    unset($_SESSION['registration_success']); // Clear the success message after displaying
                }
                ?>
                <!-- Display errors if any -->
                <?php
                if (isset($_SESSION['signup_errors'])) {
                    $errors = $_SESSION['signup_errors'];
                    echo '<div class="error-message">';
                    echo '<p>' . $errors['email'] . '</p>';
                    echo '</div>';

                    // Clear the errors after displaying
                }
                ?>
                <div class="innerinner">
                    <div class="in">
                        <p>নাম : </p>
                        <input type="text" placeholder="আপনার নাম লিখুন" name="name"
                            value="<?php echo isset($_SESSION['input_values']['name2']) ? $_SESSION['input_values']['name2'] : ''; ?>"
                            required>
                    </div>
                    <div class="in">
                        <p>ই-মেইল ঠিকানা :</p>
                        <input type="text" placeholder="আপনার ই-মেইল লিখুন" name="email"
                            value="<?php echo isset($_SESSION['input_values']['email']) ? $_SESSION['input_values']['email'] : ''; ?>"
                            required>
                    </div>
                    <div class="in">
                        <p>পাসওয়ার্ড : </p>
                        <input type="password" placeholder="আপনার পাসওয়ার্ড লিখুন" name="password"
                            value="<?php echo isset($_SESSION['input_values']['password']) ? $_SESSION['input_values']['password'] : ''; ?>"
                            required>
                    </div>
                    <div class="in">
                        <p>ঠিকানা : </p>
                        <input type="text" placeholder="আপনার ঠিকানা লিখুন" name="address"
                            value="<?php echo isset($_SESSION['input_values']['address']) ? $_SESSION['input_values']['address'] : ''; ?>"
                            required>
                    </div>
                </div>
                <div class="innerinner">
                    <div class="in">
                        <p>যোগাযোগের নম্বর : </p>
                        <input type="text" placeholder="আপনার যোগাযোগের নম্বর লিখুন" name="contact_number"
                            value="<?php echo isset($_SESSION['input_values']['contact_number']) ? $_SESSION['input_values']['contact_number'] : ''; ?>"
                            required>
                    </div>
                    <div class="log">
                        <button class="signup_button">Sign up</button>
                    </div>
                </div>


                <a href="login.php?key=1"></a>
            </form>

        </div>

    </div>

</html>