<?php
	include "header.php";

	if (isset($_POST["sign-up-btn"])) {
		signUp();
	}
?>

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 register-container">
        <h3 style="text-transform:uppercase;text-align:center;">Sign Up As A Voter</h3>
        <br>
				<form method="post" role = "form" class="register-form" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" id = "matric" name="matric" placeholder="Enter Matric Number" required />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id = "firstname" name="firstname" placeholder="Enter Firstname" required />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name = "lastname" id = "lastname" placeholder="Enter Lastname or Surname" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id ="middlename" name="middlename" placeholder="Enter Middle Name" required/>

					</div>
					<div class="form-group">
						<input type="email" name="email"  id ="email" class="form-control" placeholder="example@email.com" required/>
					</div>
					<div class="form-group">
						<input type="text" name="phone" id ="phone" class="form-control" placeholder="09000112233" required/>
					</div>
					<div class="form-group">
						<input type="password" name="password"  id="password" class="form-control" minlength="8" maxlength="30" placeholder="Enter Password" required/>
					</div>
					<div class="form-group">
						<input type="text" name="department"  id="department" class="form-control" placeholder="Enter Department" required/>
					</div>
					<div class="form-group">
						<select class="form-control" name="level" id="level" required>
							<option>100</option>
							<option>200</option>
							<option>300</option>
							<option>400</option>

						</select>
					</div>

			      	<label class="checkbox-inline"><input type="checkbox" name="agree" required />By clicking this you agree with all our terms and conditions</label><br>

					<button type="submit" name = "sign-up-btn" class="btn btn-danger btn-register">Sign Up</button>
				</form>

			</div>

			</div>
		</div>


<?php
	include "footer.php";
?>
