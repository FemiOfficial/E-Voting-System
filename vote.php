<?php
	include "header.php";
	if (!isset($_SESSION))
	{
		header('location: index.php');
	}

?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 voting-container">
			<h3>SUG ELECTION CATEGORIES</h3>
			<br>
			<div class="row">
				<?php
					require "res/conn.php";
					$fetch = mysqli_query($conn, "SELECT * FROM categories");
					while($row = mysqli_fetch_array($fetch)){

				?>
				<div class="col-md-3 category-item">
					<h4><?php echo $row["category"]; ?></h4>
					<form role = "form" method="post" action="cast.php">
						<input type="hidden" name="category" value = "<?php echo $row['category']; ?>" />
						<button class="btn btn-primary" type="submit" href="cast.php">Vote or View Progress</button>
					</form>
				</div>
				<?php
						}
				?>

			</div>


		</div>
	</div>

</div>

<?php
	include "footer.php";
?>
