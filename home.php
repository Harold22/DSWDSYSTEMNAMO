<?php
	include'class.user.php';
	$user = new User();

if(!$user->get_session()){
	header('Location:index.php');
	}
?>

<html lang="en">
    <head>
        <meta charset="UTF-16">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style/style.css"> 
		<link href="style/icon.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/ghpages-materialize.css">
		<link rel="stylesheet" type="text/css" href="style/materialize.min.css">
		<script type="text/javascript" src="style/jquery.min.js"></script>
		<script type="text/javascript" src="style/materialize.min.js"></script>
	  <style>
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

	  </style>
	  
	
	</head>



<body>
    <div class="nav-wrapper">
		
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i ><img src="style/images/menu_bar.png" style="height: 10%; width: 5%;"></i></a>
		<ul class="side-nav white" id="mobile-demo">	
			<div class="row">
				<div class="col s5">
					<img src="style/images/anonymous.jpg" width="48px"; height="48px" alt="" class="circle responsive-img valign profile-image">
				</div>
				<div class= "col-sm-12">
					<center>
					<ul> 
						<li><a href="" ><span>input</span></a></li>
						<li><a href="" ><span>crIMSData</span></a></li>
						<li><a href="" ><span>summary</span></a></li>
						<li><a href="logout.php" ><span>logout</span></a></li>
					</ul>
					</center>
				</div>
			</div>
		</ul>
    </div>
		


<script>
	$(document).ready(function(){
	  $('.button-collapse').sideNav({
		  menuWidth: 275, // Default is 300
		  edge: 'left', // Choose the horizontal origin
		  closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		  draggable: false // Choose whether you can drag to open on touch screens
		}
	  );
	  // START OPEN
	  $('.button-collapse').sideNav('show');
	});
</script>
</body>

</html>
