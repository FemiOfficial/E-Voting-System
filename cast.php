<?php
	include "header.php";
	if (!isset($_POST["category"])) {
		header("location:vote.php");
	}
	$var = $_POST["category"];

	if(isset($_POST["cast_vote"])){
		$candidate_category = $_POST["candidate_category"];
		$id = $_POST["id"];
		$fetch = mysqli_query($conn, "SELECT * FROM votes WHERE candidates_id = '$id' ");
		$check_db = mysqli_num_rows($fetch);
		if($check_db > 0){
			$row = mysqli_fetch_array($fetch);
			$count = $row["count"];
			$count = $count + 1;
			$update = mysqli_query($conn, "UPDATE votes SET count = '$count' WHERE candidates_id = '$id' ");
		}else{
			$insert = mysqli_query($conn, "INSERT INTO votes(candidates_id, category, count) VALUES ('$id', '$candidate_category', '$count')");
		}
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-9 col-md-offset-2 casting-container">
			<h3 style="text-align: center; text-transform: uppercase;">CANDIDATES IN <?php echo $var; ?> CATEGORY</h3>
			<br>
			<div class="row col-md-offset-2">
				<?php
              $sql = "SELECT * FROM candidates WHERE category = '$var'";
				 			$result = mysqli_query($conn, $sql);
							$check_user = mysqli_num_rows($result);

							if($check_user > 0){
							while($row = mysqli_fetch_array($result)){
						?>
				<div class="col-md-4 cast-item">
					<?php echo '<img  style = "height: 200px; width: 100%;" src = "data:image/jpeg;base64,'.base64_encode($row["image"]).'">'; ?>
					<div class="cast-item-content">
					<span><?php echo $row["firstname"]." ".$row["lastname"];?></span><br>
					<span><?php echo $row["department"];?></span><br>
					<span><?php echo $row["level"];?> Level</span><br>
					<span>
						<?php
										echo "<b>VOTES: ".$row['count']."</b>";
								?>
					</span><br>

					<form role = "form" method="post" action="count_vote.php">
						<input type="hidden" name="id" value = "<?php echo $row["matric"];?>"/>
						<input type="hidden" name="candidate_category" value = "<?php echo $row["category"];?>"/>
						<button class="btn btn-primary" type="submit" name="cast_vote">Cast Vote</button>
					</form>
					</div>
				</div>
				<?php
					}
						}
						else{
							?>
								<div class="col-md-9 cast-item">
									<div class="cast-item-content">
									<span style="font-weight: bold;text-align: center;">No Candidate In this Category</span><br>
									</div>
								</div>
							<?php
						}
				?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include "footer.php";
?>
