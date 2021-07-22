<!DOCTYPE html>
<html lang="en">
<body>
<?php
$email = '';
$pass = '';
$emailErr = $passErr = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['email'])) {
    $emailErr = 'You need to input an email';
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST['password'])) {
    $passErr = 'You need to enter a password!';
  } else {
    $pass = test_input($_POST["password"]);
    if (!preg_match("^[a-zA-Z0-9_.-]{4,20}$^",$pass)) {
      $passErr = "No spaces, 4-20 characters.";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Login</h1>
<form method="post" action="login.php">
  <label for="email">Email</label>
  <input type="text" id="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br>
  <label for="password">Password</label>
  <input type="password" id="password" name="password">
  <span class="error">* <?php echo $passErr;?></span>
  <br>
  <input type="submit">
  <footer>
    <p>This login form is for testing at the moment. Have fun trying to mess it up!</p>
    <a href="mailto:joey585@joey585.com">Report errors</a>
  </footer>
</form>

<?php
if ($passErr || $emailErr) {
  return;
}
echo '<h1>You inputted:</h1>';
echo $email;
echo '<br>';
echo $pass;
?>

</body>
</html>
