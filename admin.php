<?php
include "header.php";

if(isset($_POST["add-candidate-btn"])){
	addCandidate();
}
if(isset($_POST["delete_btn"])){
	 $user_id = $_POST['hiddenId'];
	$sql = "DELETE FROM `candidates` WHERE `matric` = '$user_id' ";
	$result = mysqli_query($conn, $sql);
}

?>
<div class="row">
	<div class="col-md-10 col-md-offset-1 admin-container">
	  

		<button class="btn btn-danger" id="add-btn" data-toggle ="modal" data-target="#modalReg" style="float:right;">Add new Candidate</button>
		<button class="btn btn-danger" style="display:none;float:right;" id="hide-add-btn" onclick="hideform()">Hide Form</button>

		<script type="text/javascript">
			function showform(){
				document.getElementById('add-candidate').style.display = "block";
				document.getElementById('add-btn').style.display = "none";
				document.getElementById('hide-add-btn').style.display = "block";
			}
			function hideform(){
				document.getElementById('add-candidate').style.display = "none";
				document.getElementById('add-btn').style.display = "block";
				document.getElementById('hide-add-btn').style.display = "none";
			}
		</script>	
		<div class="col-md-10 leaders col-md-offset-1 ">
			<H2>Leader Board</H2>
			<table class="table table-striped">
			    <thead>
			      <tr>
						<th>Category</th>
					<th>Firstname</th>
			        <th>Lastname</th>
			      </tr>
			    </thead>
			    <tbody>
					<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'President' ORDER BY `count` asc ";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
					<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$winner_matric = $row["matric"];
									$winner_firstname = $row["firstname"];
									$winner_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>President</td>
			        <td><?php echo $winner_firstname;?></td>
			        <td><?php echo $winner_lastname;?></td>
			      </tr>
						
					<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Vice President' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
					<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$max_vote = $row["count"];
									$vice_matric = $row["matric"];
									$vice_firstname = $row["firstname"];
									$vice_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Vice President</td>
			        <td><?php echo $vice_firstname;?></td>
			        <td><?php echo $vice_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'General Secretary' ORDER BY `count` asc ";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
					<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$max_vote = $row["count"]; 
									$gen_matric = $row["matric"];
									$gen_firstname = $row["firstname"];
									$gen_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>General Secretary</td>
			        <td><?php echo $gen_firstname;?></td>
			        <td><?php echo $gen_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Asst. General Secretary' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$asst_gen_matric = $row["matric"];
									$asst_gen_firstname = $row["firstname"];
									$asst_gen_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Assitant General Secretary</td>
			        <td><?php echo $asst_gen_firstname;?></td>
			        <td><?php echo $asst_gen_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Treasurer' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$tre_matric = $row["matric"];
									$tre_firstname = $row["firstname"];
									$tre_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Treasurer</td>
			        <td><?php echo $tre_firstname;?></td>
			        <td><?php echo $tre_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Financial Secretary' ORDER BY `count` asc ";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$fin_matric = $row["matric"];
									$fin_firstname = $row["firstname"];
									$fin_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Financial Secretary</td>
			        <td><?php echo $fin_firstname;?></td>
			        <td><?php echo $fin_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Director of Social' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$social_matric = $row["matric"];
									$social_firstname = $row["firstname"];
									$social_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Director of Social</td>
			        <td><?php echo $social_firstname;?></td>
			        <td><?php echo $social_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Director of Transport' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$trans_matric = $row["matric"];
									$trans_firstname = $row["firstname"];
									$trans_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Director of Transport</td>
			        <td><?php echo $trans_firstname;?></td>
			        <td><?php echo $trans_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Director of Sport' ORDER BY `count` asc ";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$sport_matric = $row["matric"];
									$sport_firstname = $row["firstname"];
									$sport_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Director of Sport</td>
			        <td><?php echo $sport_firstname;?></td>
			        <td><?php echo $sport_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Director of Welfare' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$wel_matric = $row["matric"];
									$wel_firstname = $row["firstname"];
									$wel_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Director of Welfare</td>
			        <td><?php echo $wel_firstname;?></td>
			        <td><?php echo $wel_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Provost' ORDER BY `count` asc";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$provost_matric = $row["matric"];
									$provost_firstname = $row["firstname"];
									$provost_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Provost</td>
			        <td><?php echo $provost_firstname;?></td>
			        <td><?php echo $provost_lastname;?></td>
			      </tr>
						<?php
						$sql = "SELECT * FROM `candidates` WHERE `category` = 'Public Relations Officer'ORDER BY `count` asc ";

					  	$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);
							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
													
					?>
						<tr>
					<?php
							$max_vote = 0;
							if($row["count"] >= $max_vote){
									$pro_matric = $row["matric"];
									$pro_firstname = $row["firstname"];
									$pro_lastname = $row["lastname"];
							}
						}
					}
					?>
						<td>Public Relations Officer</td>
			        <td><?php echo $pro_firstname;?></td>
			        <td><?php echo $pro_lastname;?></td>
			      </tr>
			    </tbody>
			  </table>
			
		</div>

		<div class="modal fade" id="modalReg" role="dialog">
			<div class="modal-dialog">
	  			<div class="modal-content">
	   				 <div class="modal-header">
	     				<button type="button" class="close" data-dismiss="modal">&times;</button>
	      				<h4 class="modal-title">ADD CANDIDATE</h4>
							</div>
	      				<div class="modal-body">
	      					<form method="post" role = "form" enctype="multipart/form-data">
	      										<div class="form-group" style="padding-bottom: 30px;">
	      											<input type="text" class="form-control" style="float: left; width: 50%;" id = "matric" name="matric" placeholder="Enter Matric Number" required />
	      											<input type="text" class="form-control" style="float: right;width: 45%;" name = "firstname" id = "firstname" placeholder="Enter Firstname" required/>

	      										</div>

	      										<div class="form-group" style="padding-bottom: 30px;">
	      											<input type="text" class="form-control" style="float: left; width: 50%;" id ="lastname" name="lastname" placeholder="Enter Lastname" required/>
	      											<input type="email" name="email" style="float: right;width: 45%;" id ="email" class="form-control" placeholder="example@email.com" required/>
	      										</div>

	      										<div class="form-group" style="padding-bottom: 40px;">
	      											<input type="number" name="phone" id ="phone" style="float: left; width: 50%;"  class="form-control" placeholder="09000112233" required/>
	      											<input type="text" name="department" style="float: right; width: 45%;"  id="department" class="form-control" placeholder="Enter Department" required/>
	      										</div>
	      										<div class="form-group" style="padding-bottom: 40px;">
	      											<input type="text" name="cgpa" id ="cgpa" style="float: left; width: 50%;"  class="form-control" placeholder="Enter Candidate CGPA" required/>
	      										<select class="form-control" name="category" style="float: right; width: 45%; margin-top: 5px;"  id="level" required>
	      											<?php
	      												$fetch = mysqli_query($conn, "SELECT * FROM categories");
	      												while($row = mysqli_fetch_array($fetch)){
	      											?>
	      											<option><?php echo $row["category"];?></option>
	      											<?php }?>
	      										</select>
	      										</div>

	      										<div class="form-group" style="padding-bottom: 40px;">
	      											<select class="form-control" name="level" style="float: left; width: 50%; margin-top: 20px;"  id="level" required>
	      												<option>100</option>
	      												<option>200</option>
	      												<option>300</option>
	      												<option>400</option>

	      											</select>
	      											<div style="float: right; width: 45%;">
	      													<label style="font-size: 10px;">Candidate Campaign Image (612px x 408px)</label>
	      													<input type="file" class="form-control" name="image"  accept="image/x-png, image/jpeg" required/>
	      											</div>

	      										</div>


	      										<button type="submit" style="margin-top: 20px;" name = "add-candidate-btn" class="btn btn-default btn-register">Add Candidate</button>
	      									</form>
						</div>
				</div>
			</div>
		</div>
							








			<div class="col-md-5 add-candidate col-md-offset-3" id="add-candidate" style=" margin-top: 30px; display: none;">
					
					

				</div>

		<div class="col-md-10 col-md-offset-1">
			<h3>President Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>
			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
                $sql = "SELECT * FROM candidates WHERE category = 'President'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>
						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
			      <td>
							<?php
										echo "<b>".$row['count']."</b>";
							?>
				     </td>
						 <td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>

			    </tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Vice President Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Vice President'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>
						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>
			    </tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>General Secretary Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'General Secretary'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>
					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>
			  </tbody>
			</table>
			<h3>Asst Gen Secretary Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Asst. General Secretary'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

			      <td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										$matric =  $row["matric"];
										$sql = "SELECT * FROM counts WHERE candidate_id = '$matric'";
										$result2 = mysqli_query($conn, $sql);
										$row2 = mysqli_fetch_array($result2);
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>
					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Financial Secretary Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Financial Secretary'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
			      <td><?php echo $row["matric"];?></td>

			      <td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
									
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>

					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Treasurer Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Treasurer'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

			      <td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>

					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>


			  </tbody>
			</table>
			<h3>Director of Social Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Director of Social'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>

					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Director of Sport Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Director of Sport'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>
					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Director of Transport Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			   	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Director of Transport'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

			      <td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>

					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Director of Welfare Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>
			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Director of Welfare'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
			      <td><?php echo $row["matric"];?></td>

			      <td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>

					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Provost Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Provost'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>
					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>
			<h3>Public Relations Officer (P.R.O) Aspirants</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>Profile-Image</th>
						<th>Matric Number</th>

			      <th>Firstname</th>
			      <th>Lastname</th>
			      <th>Email</th>
			      <th>Phone</th>
			      <th>Department</th>
			      <th>Level</th>
			      <th>CGPA</th>
			      <th>Votes</th>
						<th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    	<?php
                  				$sql = "SELECT * FROM candidates WHERE category = 'Public Relations Officer'";
				 				$result = mysqli_query($conn, $sql);

							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
			    <tr>
			      <td><?php echo '<img  style = "border-radius: 10px;height: 50px; width: 50px;"src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?></td>
						<td><?php echo $row["matric"];?></td>

						<td><?php echo $row["firstname"];?></td>
			      <td><?php echo $row["lastname"];?></td>
			      <td><?php echo $row["email"];?></td>
			      <td><?php echo $row["phone"];?></td>
			      <td><?php echo $row["department"];?></td>
			      <td><?php echo $row["level"];?></td>
			      <td><?php echo $row["cgpa"];?></td>
						<td>
							<?php
										
										echo "<b>".$row['count']."</b>";
							?>
						</td>
						<td>
								<form method = "post" action = "admin.php">
									<input type = "hidden" value = "<?php echo $row['matric'];?>" name = "hiddenId" />
									<button name = "delete_btn" type = "submit" class = "btn btn-danger">Delete</button>
								</form>
						</td>
					</tr>

			    <?php
						}
			    	}else{
			    		echo "None Yet";
			    	}
			    	?>

			  </tbody>
			</table>


		</div>


	</div>
</div>


<?php include "footer.php";?>
