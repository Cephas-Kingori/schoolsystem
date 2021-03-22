<?php
session_start();

//create connection to database
$conn = mysqli_connect('localhost','school_admin','schooladmin1','school');

$emailLog = '';
$passwordLog = '';
//capture input
if (isset($_POST['login_button'])) {
	# code...
    $emailLog = $_POST['emaillog'];
    $passwordLog = $_POST['passlog'];
    $passwordLog = md5($passwordLog);
}

//create the sql query
//create sql query to fetch records
$sql="SELECT * FROM school.users WHERE email='$emailLog' && password= '$passwordLog'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$details = mysqli_fetch_assoc($result);
//print_r($details);
//logic to check if user exists
if ($num==1){
    //store name of logged in user
    //$_SESSION['activeUser']= $username;
    //setting new location after user logs in correctly
    //switch role here
    if($details['role'] == 'student'){
        header('location: student.php');

    }
    if($details['role'] == 'administrator'){
        header('location: admin.php');

    }
}
else{
    //session variable for unidentified user 
$_SESSION['userUnavailable'] = "Please try again, incorrect credentials";
    //setting new location if user creds are wrong
    header('location: login.php');
    
}


?>