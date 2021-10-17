<?php 
		require_once "server.php";
		if(isset($_POST)){
     		$username=filter_input(INPUT_POST,'username');
    		$email=filter_input(INPUT_POST,'email');
    		$password=filter_input(INPUT_POST,'password');

			$sql="INSERT INTO admin (username, email, password) VALUES ('$username','$email','$password')";
			if(mysqli_query($db, $sql)){
				echo "Record was updated successfully.";
				header("location:login.html");


			} else {
    				echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
			}
  
			mysqli_close($db);
		}
	?>