<?php
require_once('core/init.php');
$user = new User();

if($user->isLoggedIn()){
	Redirect::to('index.php');
}

if(isset($_POST) & !empty($_POST)){
	// $username = mysqli_real_escape_string($connection, $_POST['username']);
	// $sql = "SELECT * FROM `login` WHERE username = '$username'";
	// $res = mysqli_query($connection, $sql);
	// $count = mysqli_num_rows($res);
	$username = $_POST['username'];
	if ($user->find($username)){
		$email = $user->data()->email;
		// if ($email == $_POST['email']){
		$password = rand(999999,999999999);


	// if($count == 1){
		// $r = mysqli_fetch_assoc($res);
		// $password = $r['password'];


		$to = $email;
		$subject = "Your Recovered Password";

		$message = "Please use this password to login " . $password;
			// $headers = "From : <dimitra665@gmail.com>";
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: TEam NULL <dimitra665@gmai.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
			$id=$user->data()->id;
			$salt = Hash::salt(32);
			$user->update(array(
				'password'	=> Hash::make($password, $salt),
				// 'password' => $password,
				'salt'		=> $salt
			),$id);

			Session::flash('home', 'Password Changed');
			Redirect::to('index.php');

		}else{
			echo "Failed to Recover your password, try again";
		}
	}else{
		echo "User name does not exist in database";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
<!-- 		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?> -->
	<form class="form-signin" method="POST">
		<h2 class="form-signin-heading">Παρακαλώ δώστε μας το όνομα χρήστη</h2>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">@</span>
			<input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
	</form>
</div>
</body>
</html>
