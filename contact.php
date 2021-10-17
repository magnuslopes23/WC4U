<?php 
require_once "server.php";
if(isset($_POST)){
    $name=filter_input(INPUT_POST,'name');
    $email=filter_input(INPUT_POST,'email');
    $feedback=filter_input(INPUT_POST,'feedback');

$sql="INSERT INTO feedback (name, email, feedback) VALUES ('$name','$email','$feedback')";
if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";

             header("location: index.html");

} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}
  
	mysqli_close($db);
}
?>



