<?php 
require("../core/require/includes.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel="stylesheet" href="../core/assets/css/auth.css">
</head>
<body>
    <body id="particles-js"></body>
    <div class="animated bounceInDown">
        <div class="container">
            <span class="error animated tada" id="msg"></span>
            <form name="form1" class="box" onsubmit="return checkStuff()">
                <h4><?= $_CONFIG['app_name']?></h4>
                <h5>Sign in to your account.</h5>
                <input type="text" name="email" placeholder="Email" autocomplete="off">

                <input type="text" name="email" placeholder="Email" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
                <a href="#" class="forgetpass">Forget Password?</a>
                &nbsp;
                <input type="submit" value="Sign up" class="btn1">
            </form>
            <a href="register" class="dnthave">Have an account? Sign in</a>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
    <script src="../core/assets/js/auth.js"></script>

</body>

</html>