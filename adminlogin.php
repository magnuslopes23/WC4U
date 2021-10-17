<?php 
	require_once "server.php";
	if(isset($_POST)){
    	$username=filter_input(INPUT_POST,'username');
        $password=filter_input(INPUT_POST,'password');
        
        $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$password'";
		$result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
        $count = mysqli_num_rows($result);
        if($count == 1) {
         
            header("location: details.php");
        }
        else{
            echo 'invalid username password';
        }
	}
?>
<br>
<button onclick="document.location='login.html'">TRY AGAIN</button>
