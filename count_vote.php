
<?php
  include "res/session.php";

  require "res/conn.php";
	if(isset($_POST["cast_vote"])){
		$candidate_category = $_POST["candidate_category"];
		$id = $_POST["id"];
    $voter_id = $_SESSION['matric'];
    $sql = "SELECT * FROM votes WHERE voter_id = '$voter_id' AND category  = '$candidate_category'";
    $fetch = mysqli_query($conn, $sql);
		$check_db = mysqli_num_rows($fetch);
    if($check_db > 0){
        echo "<script>alert('You Cannot Cast Vote Twice');</script>";
      	echo "<script>window.open('vote.php', '_self')</script>";
      // header("location:vote.php");
    }else{
      $sql = "SELECT * FROM candidates WHERE matric = '$id'";
    	$fetch = mysqli_query($conn, $sql);
  		$check_db = mysqli_num_rows($fetch);

      if($check_db > 0){
  			$row = mysqli_fetch_array($fetch);
  			$count = $row["count"];
  			$count = $count + 1;
        $insert = mysqli_query($conn, "INSERT INTO votes (candidate_id, category, voter_id) VALUES ('$id','$candidate_category','$voter_id')");
  			$update = mysqli_query($conn, "UPDATE candidates SET count = '$count' WHERE matric = '$id' ");
        echo "<script>alert('Vote Casted Successfully');</script>";
      	echo "<script>window.open('vote.php', '_self')</script>";
      }
  		// }else{
    //     $insertvote = mysqli_query($conn, "INSERT INTO votes (candidate_id, category, voter_id) VALUES ('$id','$candidate_category','$voter_id')");
  		// 	$insertcount = mysqli_query($conn, "INSERT INTO counts (candidate_id, count) VALUES ('$id','1')");
    //     echo "<script>alert('Vote Casted Successfully');</script>";
    //   	echo "<script>window.open('vote.php', '_self')</script>";
    //   }
    }

	}



?>
