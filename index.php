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
 	<div class="row" style="margin-top: 50px;padding-bottom: 0px;border-bottom: 1px solid #333">
 		<div class="col-md-7" style="background:url('img/vote.png')  no-repeat 0px 0px;background-size: contain;height: 720px; padding-top: 420px; padding-left: 70px;border-radius: none;">

 			<!-- <button class="btn btn-lg btn-default" style="border-radius: none;">Learn More</button>
 -->
 		</div>
 		<div class="col-md-5 leader-container" >
 	 			<h3>Top Candidates</h3>
 	 			<span style="color: red; font-size: 13px; margin-left: 20px;font-weight: bold;">Pooling booth still in open 20 days left</span>
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
			  
	 </div>
	 	 <h3 style="text-align: center;">SUG ELECTION CATEGORIES</h3>
	 		
	 <div class="row">
	
	 	<div class="col-md-10 col-md-offset-1 voting-container" style="margin-top: 0px;">
	 		<br>
	 		<div class="row">
	 			<?php
	 				require "res/conn.php";
	 				$fetch = mysqli_query($conn, "SELECT * FROM categories");
	 				while($row = mysqli_fetch_array($fetch)){

	 			?>
	 			<div class="col-md-3 category-item">
	 				<h4><?php echo $row["category"]; ?></h4>
	 				<!-- <form role = "form" method="post" action="cast.php">
	 					<input type="hidden" name="category" value = "<?php echo $row['category']; ?>" />
	 					<button class="btn btn-primary" type="submit" href="cast.php">Vote or View Progress</button>
	 				</form> -->
	 			</div>
	 			<?php
	 					}
	 			?>

	 		</div>


	 	</div>
	 </div>
	 






<?php
		include "footer.php";

?>
