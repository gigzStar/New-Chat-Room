<?php
	session_start();
	if (isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
	}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Public Chat</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<div class="pen-title">
  
</div>

<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form name="form_login" method="post" action="login.php">
      <input type="text" placeholder="Username" name="username" />
      <input type="password" placeholder="Password" name="password" />
      <button>Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form name="form_register" method="post" action="register.php">
      <input type="text" placeholder="Your Name" name="your_name" required="required" />
      <input type="text" placeholder="Username" name="username" required="required" />
      <input type="password" placeholder="Password" name="password" required="required" />
      <input type="email" placeholder="Email Address" name="email" />
      <input type="phone" placeholder="Phone Number" name="phone" />
      <button>Register</button>
    </form>
  </div>
  <div class="cta"><center>Made by: <a href="https://code-projects.org/">GAHIGIRA Gislain</center></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script  src="js/index.js"></script>




</body>

</html>
