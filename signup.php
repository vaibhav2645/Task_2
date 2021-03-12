<!DOCTYPE html>
<head>
	
<title>The secret Diary project</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="custom.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="container col-md-6">
<div class='wrapper'>

<?php 
	session_start();
include 'connect.php'; //Connect to the SQL database
if (		!empty($_POST['username']) && !empty($_POST['password'])		){
$username=$_POST['username'];
$password=$_POST['password'];
$passwordhash= password_hash($password, PASSWORD_DEFAULT);
$query= "SELECT * FROM `users` WHERE  `username`='".mysqli_real_escape_string($link,$username)."'";
$result=mysqli_query($link,$query);
	/*check if the username is not already in the database*/
	if (mysqli_num_rows($result)==0 /*username doesn't exist*/){


	/*make a new database entry*/
$query = "INSERT INTO `users` (`username`, `password`) VALUES ('".mysqli_real_escape_string ($link,$username)."', '$passwordhash')";


		if (mysqli_query($link, $query)){
	echo "<div class='alert alert-success' role='alert'><h6>You Signed-up successfully, you will be redirected to the <a href='diary.php'>diary page</a>.</h6>";
	$_SESSION['username']=$username;
	setcookie('username', $username, time()+(60*60*24)	);
	header("refresh:2;url=diary.php" );

		}
	} else 
	/*username exists in the database, show error*/
	{echo "<div class='alert alert-danger form-control' role='alert'>
	<h6>Username already exists, try another username - <a href=index.php?p=exist>Sign-up</a></h6>";
		header("refresh:2;url=index.php?p=exist" );

		}

} else {
		header('Location: index.php');
	}


 ?>
  </div>
 </body>
