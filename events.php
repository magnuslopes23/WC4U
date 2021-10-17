<?php 
require_once "server.php";
if(isset($_POST)){
    $name=filter_input(INPUT_POST,'fullname');
    $event=filter_input(INPUT_POST,'event');
    $fees=filter_input(INPUT_POST,'fees');

$sql="INSERT INTO events (fullname, event, fees) VALUES ('$name','$event', '$fees')";
if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";

             header("location: event.html");

} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}
  
	mysqli_close($db);
}
?>