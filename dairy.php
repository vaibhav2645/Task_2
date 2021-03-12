<?php 
	session_start();
?>
<!DOCTYPE html>
<head>
	
<title>The secret Diary project</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="custom.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="container col-md-6">
<?php 
include 'connect.php'; //Connect to the SQL database



if ( //check if user is logged-in
	isset($_SESSION['username'])
	 || 
	isset($_COOKIE['username']) 
	){
if(	isset($_COOKIE['username']) ){	$username=$_COOKIE['username'];}
	else{$username=$_SESSION['username'];}
			
		if(			isset($_POST['diary'])			){
	$diary=$_POST['diary'];
	$query = "UPDATE `users` SET `story`='$diary' WHERE username='".mysqli_real_escape_string($link,$username)."'";
	mysqli_query($link,$query);
		}
	

	$verifConnect=true;
	;
} else 
		//Check if username & password match
	if (		!empty($_POST['username']) && !empty($_POST['password'])		){
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT `password` FROM `users` WHERE `username`='".mysqli_real_escape_string($link,$username)."'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
		if(	password_verify($password,$row[0])	){
		$verifLogin=true;
		$_SESSION['username']=$username;
			if (	isset($_POST['staylogged'])	) {
					setcookie("username", $username, time() + (60*60*24) );
			}		
		} else {
			echo"hello1";header("refresh:2;url=index.php?p=wrong");die();}
	}

if (isset($verifConnect) || isset($verifLogin)){
$query= "SELECT `story` FROM `users` WHERE `username`='".mysqli_real_escape_string($link,$username)."'";
	$result=mysqli_query($link,$query);
	$storyfetched=mysqli_fetch_array($result);

	echo"<h2>Welcome $username, <a href='logout.php'>Log-out</a></h2>";
	echo'
  <textarea id="diarybox" placeholder="Write you diaries here" class="form-control" rows="5" id="comment">'.$storyfetched[0].'</textarea>
	';
} else {
		echo"hello";header("refresh:2;url=index.php?p=wrong");die();}

	
?>
 </div>
 </body>
 <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  
  <script type="text/javascript">
  	$("#diarybox").on( 'input', function(){
    $.post("diary.php",
    {
        diary: $('#diarybox').val()
    }   );
	});
  </script>
