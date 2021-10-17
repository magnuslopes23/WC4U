<?php 
require_once "server.php";
if(isset($_POST)){
     $name=filter_input(INPUT_POST,'fullname');
    $amount=filter_input(INPUT_POST,'amount');

$sql="INSERT INTO donation (fullname, amount) VALUES ('$name','$amount')";
if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";

             header("location: donate.html");

} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}
  
	mysqli_close($db);
}
?>