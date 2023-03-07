<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.css">

  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <!-- Custom CSS -->
  <style>
    body {
      height: 100vh;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    /* Set background image with particles and blur effect */
    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      background-color: #1f1f1f;
      background-image: url("https://craftycontrol.com/static/img/hero-bg.jpg");
      background-size: cover;
      background-position: center center;
      z-index: -1;

      top: 0;
      left: 0;
    }

    /* Set the form container in the center */
    .form-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      padding: 40px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
    /* Style the form header */
    .form-header {
      text-align: center;
      margin-bottom: 40px;
    }
    .form-header h2 {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    /* Style the form fields */
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-group input {
      padding: 10px;
      border: none;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    }
    /* Style the form button */
    .form-btn {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
    .form-btn:hover {
      background-color: #0062cc;
    }
  </style>
</head>
<body>
  <!-- Particles.js container -->
  <div id="particles-js"></div>
  <!-- Form container -->
  <div class="form-container">
    <!-- Form header -->
    <div class="form-header">
      <h2>Login</h2>
      <p>Please enter your email and password to login.</p>
    </div>
    <!-- Login form -->
          <!-- Login form -->
          <form>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="form-btn">Login</button>
      </form>
      <!-- End of login form -->
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Particles.js JS -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.12/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!-- Custom JS -->
  <script>
    // Particles.js config
    particlesJS.load('particles-js', 'particles.json', function() {
      console.log('callback - particles.js config loaded');
    });
  </script>
</body>
</html>
