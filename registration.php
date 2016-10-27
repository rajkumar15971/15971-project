<?php
$connection = mysqli_connect('localhost', 'root','');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));

	}
if (isset($_POST['username']) && isset($_POST['password'])){
       		$username = $_POST['username'];
	    $password = $_POST['password']; 
        $query = "INSERT INTO `user` (username,password) VALUES ('$username', '$password',)";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }


	?>