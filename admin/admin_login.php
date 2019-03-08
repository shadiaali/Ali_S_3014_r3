<?php
	require_once('scripts/config.php');

	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];

		$message = login($username, $password, $ip);
	}else{
		if(isset($_POST['username']) || isset($_POST['password'])){
			$message = 'Please fill the required fields';
		}
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
</head>
<body>
	<?php if(!empty($message)):?>
	<p><?php echo $message;?></p>
	<?php endif;?>
	<form action="admin_login.php" method="POST">
		<label>Username:
			<input type="text" name="username" value="">
		</label>
		<label>Password:
			<input type="password" name="password">
		</label>
		<button type="submit">Login</button>
	</form>
</body>
</html>
