<?php

		session_start();
		include("dbconnect.php");
		include("logout.php");


		if ($_POST['submit']=="Sign Up") {
  

 		
 		if(!$_POST['Nickname']) $error.="<br/>Please choose a nickname.";
 			else {

 					if(strlen($_POST['Nickname'])<3) $error.="<br/> Please choose a nickname that has at least 3 characters.";


 			}
 		if (!$_POST['Password']) $error.="<br />Please enter your password";
 		else { 
  
 
 			if (strlen($_POST['Password'])<8) $error.="<br />Please enter at least 8 characters password.";
 
 			if(!preg_match('/[A-Z]/', $_POST['Password'])) $error.= "<br />Please include a capital letter in your password.";
 		}
			if ($error) $error = "There were error(s) in your sign up details:".$error;
			
			else {
			$query="SELECT * FROM `users` WHERE `nom`='".mysqli_real_escape_string($link, $_POST['Nickname'])."'";
			
			$result = mysqli_query($link, $query);	
			$results = mysqli_num_rows($result);

			if ($results) $error = "That nickname is already taken. Do you want to log in?";
			else {
			
			$query = "INSERT INTO `users` (`nom`,`password`) VALUES ('".mysqli_real_escape_string($link, $_POST['Nickname'])."', '".md5(md5($_POST['Nickname']).$_POST['Password'])."')";
   
    		mysqli_query($link, $query);
    		
    		$message="You have been signed up!";
    		
    		$_SESSION['id']= mysqli_insert_id($link);
    		

			}	
			
		}
   
	}


	if ($_POST['submit'] == 'Log In') {	
	
		$query = "SELECT * FROM users WHERE nom='".mysqli_real_escape_string($link, $_POST['nickname'])."'AND 
		password='" .md5(md5($_POST['nickname']) .$_POST['password']). "'LIMIT 1";

		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
		
		if($row){
		
			$_SESSION['id']=$row['id'];
			
			
				header("Location: home.php");
			}
			
		
    
		 else {
		
			$error = "We could not find a user with that email and password. Please try again.";
			
			
		
		}
	
	}
	
	
?>

