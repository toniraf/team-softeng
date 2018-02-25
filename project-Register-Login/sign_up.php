<?php
$usernameErr = $emailErr = $passwordErr = $passwordVerErr = $diffPasswordErr = $agreedToTermsErr = "";
$username = $password = $email = $passwordVer = $agreedToTerms = "";
$signTheUser = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {//checking igf username was entered
  if (empty($_POST["username"])) {
    $usernameErr = "Please enter a username.";
    $signTheUser = false;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) { //ckecking if username has valid format.
      $usernameErr = "Username must contain only letters and white spaces.";
      $signTheUser = false;
    }
    elseif (false){ //synthikh gia tsekarisma ths periptwshs to user name na einai taken
      $usernameErr = $username . "is currently being used by another user. Please enter a different username.";
      $signTheUser = false;
    }
  }

  if (empty($_POST["email"])) { //checking if an email was enetered
    $emailErr = "Please enter an email.";
    $signTheUser = false;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //checking if email has valid format
      $emailErr = "Invalid email format.";
      $signTheUser = false;
    }
    elseif (false) {//check an yparxei sthn vash dedwmenwn to idio mail
      $emailErr = "This email adress is already in use. Please enter another email.";
    }
  }

  if (empty($_POST["password"])){// checking if password was entered
    $passwordErr = "Please enter a password.";
    $signTheUser = false;
  } else {
    $password = test_input($_POST["password"]);
    if (false){// edw tha mpei synthikh gia thn morfh toy password px posoi xarakthres klp
      $passwordErr = "Password needs to be...";
      $signTheUser = false;
    }
  }

  if (empty($_POST["passwordVer"])){// checking if password was enetered the second time
    $passwordVerErr = "Please re-enter your password.";
    $signTheUser = false;
  } else {
    $passwordVer = test_input($_POST["passwordVer"]);
  }

  if (!empty($_POST["passwordVer"]) && !empty($_POST["password"])){// if password was entered both times
    if ($_POST["passwordVer"] != $_POST["password"]){// if the 2 passwords are not the same
      $diffPasswordErr = "Please verify your password";
      $signTheUser = false;
    }
  }

  if (empty($_POST["agreed"])){// checking if agreed with Terms was chosen
    $agreedToTermsErr = "Agree with the Terms of Use to continue.";
    $signTheUser = false;
  }else{
    $agreedToTerms = test_input($_POST["agreed"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<head>
  <style>
  .error {color: #FF0000;}
  </style>
  <title>Sign up</title>
</head>
<body>
  Sign in as Parent:
  <br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  *Username: <input type="text" name="username">
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>
  *e-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  *Password: <input type="password" name="password">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>
  *Re-enter Password: <input type="password" name="passwordVer">
  <span class="error"> <?php echo $passwordVerErr;?></span>
  <span class="error"> <?php echo $diffPasswordErr;?></span>
  <br><br>
  <input type="radio" name="agreed" value="true">
  I agree to the Terms of Use.
  <span class="error"> <?php echo $agreedToTermsErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
  <?php
    echo "<h2>Infos of the user:</h2>";
    if ($signTheUser){
      echo "Username: " . $username;
      echo "<br>";
      echo "Email: " . $email;
      echo "<br>";
      echo "Password: " . $password;
    }else {
      echo "There was an error.";
    }
  ?>
</body>
</html>
