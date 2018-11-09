<?php
include "res/session.php";
include "res/conn.php";
include "res/functions.php";

if(isset($_POST["btn-logout"])){
	logOut();
	header('location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Voting System </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; created by alayesanmi femi brythub.inc" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesone.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/controls.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>

</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php" style="color: #fff;text-transform: uppercase;" href="#">E-Voting System</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	      	<?php
	      			if($_SESSION != NULL){
	      	?>
	      			<li><a  class = "btn-reg"><i class="fa fa-user" style="padding-right:8px;"></i><?php echo $_SESSION['firstname'];?></a></li>
	              	<li>
	              		<form method="post" role = "form">
	              			<button class = "btn-reg" type="submit" name="btn-logout"><i class="fa fa-sign-out" style="padding-right:8px;"></i> Logout</button>

	              		</form>
	      			</li>
	      	<?php
	      			}else{
	      	?>
	      			<li><a href="register.php" class = "btn-reg" ><i class="fa fa-user-plus" style="padding-right:8px;"></i> Register</a></li>
	      		  	<li><a href = "login.php" class = "btn-reg"><i class="fa fa-sign-in" style="padding-right:8px;"></i> Login</a></li>
	      	<?php
	      			}
	      	?>
		  		<li><a href="#"><i class="fa fa-info-circle" style="padding-right:8px;"></i> About </a></li>
	        	<li><a href="#"><i class="fa fa-question-circle" style="padding-right:8px;"></i>Support</a></li>
	      </ul>

	    </div>
	  </div>
		</nav>
	</header>
