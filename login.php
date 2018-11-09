<?php
	include "header.php";

	if(isset($_POST["sign-in-btn"])){
		if($_POST['matric'] == "admin" AND  $_POST['password'] == "123456" ){
				$_SESSION["firstname"] = "Admin";
				echo "<script>window.open('admin.php', '_self')</script>";
				}
				else{
						signIn();
					}
	}

?>


<div class="container" style="margin-top:100px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 login-container" id = "login-form">
			<h3>Sign In As A VOTER</h3>
			<br>
			<div class="login-form">
				<div class="alert alert-danger alert-dismissable" id = "alert" style="display: none;">
					</div>
				<form  role = "form" method="post">
					<div class="form-group">
						<input type="text" class = "form-control" name="matric" id="matric" placeholder="Enter Matric Number" required/>
					</div>
					<div class="form-group">
						<input type="password" class = "form-control" name="password" id="password" placeholder="password" required/>
					</div>
					<!-- <div class="checkbox">
						<a href="/register.php">Forgot your password?</a>
					 </div>
					 --><button class="btn btn-danger" name="sign-in-btn">Log In</button>
					<br>
					<div class="checkbox">
									<a id ="create_acct" href="register.php">Create an account</a>
					 </div>
				</form>
			</div>
		</div>

	</div>

</div>
<?php
	include "footer.php";
?>
