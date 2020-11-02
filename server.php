<?php
session_start();

//initialising variables
$username = "";
$email = "";
$password='';
$errors = array();

//connect to db
$db = mysqli_connect('localhost','root','','orphanage') or die('could not connect to database');

//registration fo new users
$username = mysqli_real_escape_string($db,($_POST['username']));
$email = mysqli_real_escape_string($db,($_POST['email']));
$password = mysqli_real_escape_string($db,($_POST['password']));

//validation
if(empty($username)){
    array_push($errors, "username is required");
};
if(empty($email)){
    array_push($errors, "email is required");
};
if(empty($password)){
    array_push($errors, "password is required");
};

//check db for existing username or email

$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$users= mysqli_fetch_assoc($result);

if($users){
    if($users['username'] === $username){array_push($errors,'Username already exixts');}
    if($users['email'] === $email){array_push($errors,'email already exixts');}
}

//register user if no error
if(count($errors)===0){

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query); 
}
?>