<?php 
require('core/require/includes.php');
session_start();
if (!$dbconn->ping()) {
    $_SESSION['error'] = "There was an error communicating with MYSQL";
    echo '<script>window.location.replace("auth");</script>';
    die();
    
}

$curl = curl_init();
$panel_url = $_CONFIG['cb_url'] . '/cloudAPI/';
curl_setopt_array($curl, array(
  CURLOPT_URL => $panel_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"serverUserName": "'.$_CONFIG['cb_user'].'",
	"controller": "verifyLogin"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: '.$_CONFIG["cb_auth"]
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);


if (empty($data['error_message'])) {
	// do something when there is no error message
  } else {
	$error_message = htmlspecialchars($data['error_message']);
	echo '<script>alert("There was an error please send this error to the website owner: '.$error_message.'");</script>';
	echo '<font color="red">There was an error please send this to the owner:</font> <font color="darkred"><code>'.$error_message.'</code></font>';
	exit();
  }

if (isset($_GET['register'])) {
	$username = mysqli_real_escape_string($dbconn, $_GET['username']);
	$email = mysqli_real_escape_string($dbconn, $_GET['email']);
    $password = mysqli_real_escape_string($dbconn, $_GET['password']);
	$random_str = bin2hex(random_bytes(4));
	$current_date = date("Y-m-d H:i:s");
	$token = $current_date . $username . $random_str;
	$base64_token = base64_encode($token);
	$token = bin2hex($base64_token);
	$insecure_passwords = array("password", "1234", "qwerty","qwertz", "test", "testing", "letmein", "admin", "pass", "123456789", "dad", "mom", "kek", "fuck", "pussy");
    if (in_array($password, $insecure_passwords)) {
        $_SESSION['error'] = "Password is not secure. Please choose a different one";
        echo '<script>window.location.replace("/auth/register");</script>';
        die();
    } else {
        
    }
    $blocked_usernames = array("password", "1234", "qwerty", "letmein", "admin", "pass", "123456789", "dad", "mom", "kek", "fuck", "pussy", "plexed", "badsk", "username", "sex", "porn", "nudes", "nude", "ass", "hacker", "bigdick");
    if (in_array($username, $blocked_usernames)) {
        $_SESSION['error'] = "Please don`t use this username we blocked it!";
        echo '<script>window.location.replace("/auth/register");</script>';
        die();
    } else {
        
    }
    if (preg_match("/[^a-zA-Z]+/", $username)) {
      $_SESSION['error'] = "Please don`t use this username we blocked it!";
      echo '<script>window.location.replace("/auth/register");</script>';
      die();
    } else {
        
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $_CONFIG['app_name']?> | Auth</title>
	<!-- Fonts and icons -->
	<script src="core/assets/js/plugin/webfont/webfont.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" media="all"><link rel="stylesheet" href="core/assets/css/fonts.min.css" media="all"><script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['core/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.css">

  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="stylesheet" href="core/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="core/assets/css/atlantis.css">
  <link rel="stylesheet" href="core/assets/css/auth.css">
</head>
<body>
<?php 
if (isset($_SESSION["error"])) {
	?>
	<style>
.alert {
  position: relative;
}
.alert .btn-close {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
}
.alert.fadeout {
  animation: fadeout 1s forwards;
}
@keyframes fadeout {
  from { opacity: 1; transform: translateY(0); }
  to { opacity: 0; transform: translateY(-50px); }
}
</style>

<div class="alert alert-danger" role="alert" id="myAlert">
  <strong>Error!</strong> <?= $_SESSION["error"] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>
  setTimeout(function() {
    var myAlert = document.querySelector('#myAlert');
    if (myAlert) {
      myAlert.classList.add('fadeout');
      setTimeout(function() {
        myAlert.remove();
      }, 1000); 
    }
  }, 3000); 
</script>
	<?php
	unset($_SESSION["error"]);
}

?>
  <!-- Particles.js container -->
  <div id="particles-js"></div>
  <!-- Form container -->
  <body class="login" style="display: block; opacity: 1;">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn" style="display: block;">
		
			<h3 class="text-center">Sign In To <?= $_CONFIG['app_name']?> </h3>
			
			<form method="GET">
			<div class="login-form">
				<div class="form-group">
					<label for="email" class="placeholder"><b>Email</b></label>
					<input id="email" name="email" type="text" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="password" class="placeholder"><b>Password</b></label>
					<a href="#" class="link float-right">Forget Password ?</a>
					<div class="position-relative">
						<input id="password" name="password" type="password" class="form-control" required="">
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
				</div>
				<div class="form-group text-center">
				    <button type="submit" class="btn btn-primary col-md-5 mt-3 mt-sm-0 fw-bold"><a>Sign In</a></button>
				</div>
				<div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="#" id="show-signup" class="link">Sign Up</a>
				</div>
				
			</div>
			
	    	</form>
		</div>

		<div class="container container-signup animated fadeIn" style="display: none;">
			<h3 class="text-center">Sign Up To <?= $_CONFIG['app_name']?> </h3>
			<form method="GET">
			<div class="login-form">
				<div class="form-group">
					<label for="username" class="placeholder"><b>Username</b></label>
					<input id="username" name="username" type="text" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="email" class="placeholder"><b>Email</b></label>
					<input id="email" name="email" type="email" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="password" class="placeholder"><b>Password</b></label>
					<div class="position-relative">
						<input id="password" name="password" type="password" class="form-control" required="">
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input required type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
					</div>
				</div>
				<div class="row form-action">
					<div class="col-md-6">
						<a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
					</div>
					<div class="col-md-6">
						<button type="submit" name="register" href="#" class="btn btn-primary w-100 fw-bold">Sign Up</button>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>

  </div>

  <!-- Bootstrap 5 JS -->
  <script src="core/assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="core/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="core/assets/js/core/popper.min.js"></script>
  <script src="core/assets/js/core/bootstrap.min.js"></script>
  <script src="core/assets/js/atlantis.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Particles.js JS -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.12/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!-- Custom JS -->
  <script>
    // Particles.js config
    particlesJS.load('particles-js', 'core/assets/json/particles.json', function() {
      console.log('callback - particles.js config loaded');
    });
  </script>
</body>
</html>
