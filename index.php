<?php
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['login'])) {
		extract($_REQUEST);
	    $login = $user->check_login($username, $password);
	    if ($login) {
	       header("location:home.php");
		   $user->set_session($login);
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css"> 
        <link rel="stylesheet" href="style/bootstrap.css">
        <link rel="stylesheet" href="style/bootstrap.min.css">
        <link rel="stylesheet" href="style/bootstrap-theme.css">
        <link rel="stylesheet" href="style/bootstrap-theme.min.css">
		<link href="style/icon.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/materialize.min.css">
		<script type="text/javascript" src="style/jquery.min.js"></script>
		<script type="text/javascript" src="style/materialize.min.js"></script>
	  <style>
		@media only screen and (max-width: 600px) 
		body {
		  display: flex;
		  min-height: 100vh;
		  flex-direction: column;
		}

		main {
		  flex: 1 0 auto;
		}
	
		body {
		  background:  #1E90FF;
		}

		.input-field input[type=date]:focus + label,
		.input-field input[type=text]:focus + label,
		.input-field input[type=email]:focus + label,
		.input-field input[type=password]:focus + label {
		  color: #e91e63;
		}

		.input-field input[type=date]:focus,
		.input-field input[type=text]:focus,
		.input-field input[type=email]:focus, 	
		.input-field input[type=password]:focus {
		  border-bottom: 2px solid #e91e63;
		  box-shadow: none;
		}
	  </style>
	
	</head>



<body>
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 250px;" src="style/gifs/welcome.gif" />
      <div class="section"></div>

      <h5 class="gray-text">Login Please</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 2px solid green;">

          <form class="col s12" action="index.php" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' required />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Enter your password</label>
              </div>
			  <script>
				function mouseover(object){
					var object = document.getElementById("password");
					object.type = "text";
				}
				function mouseOut(object){
					var object = document.getElementById("password")
					object.type = "password";
				}
			  </script>
              
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='login' class='col s12 btn btn-large waves-effect blue'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a class="white-text" href="#!">Create account</a>
    </center>

   
  </main>


</body>

</html>
