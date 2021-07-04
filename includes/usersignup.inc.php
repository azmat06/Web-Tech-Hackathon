<?php 
	
	if(isset($_POST['bttn1'])){

		require_once '../db_connect.php';
		require_once 'functions.inc.php';

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];

		$username=$_POST['username'];
		$pwd=$_POST['password'];
		$cpwd=$_POST['cpassword'];

		if(empty($fname) || empty($lname) || empty($email) || empty($mobile) || empty($username) || empty($pwd) || empty($cpwd)){
			header('location: ../usersignup.php?error=emptyinput');
			exit();
		}
		if(uidIsInvalid($conn, $username)==true){
			header('location: ../usersignup.php?error=invaliduid');
			exit();
		}
		if(!is_numeric($mobile)){
			header('location: ../usersignup.php?error=invalidmobile');
			exit();
		}
		if($pwd != $cpwd){
			header('location: ../usersignup.php?error=passwordsdonotmatch');
			exit();
		}

		$sql1="insert into account(fname, lname, email, mobile_no, bank_acc_no, username, password) values('".$fname."','".$lname."','".$email."','".$mobile."','".$username."','".$pwd."');";
		if(mysqli_query($conn, $sql1)){
			echo "Succesful";

	}else{
		header('location: ../usersignup.php');
		exit();
	}
}
