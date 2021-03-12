<?php session_start();?>
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

if (	isset(	$_COOKIE["username"]	)	){ //checks for a cookie first

	echo"<div class='alert alert-success' role='alert'><h6>Weclome ".$_COOKIE["username"]."</h6>
<p>Go to your <a href='diary.php'>diary page</a>, or <a href='logout.php'>Logout</a></p>
	</div>";



} else if(	isset($_SESSION["username"])	){ //then checks for a session


	echo"<div class='alert alert-success' role='alert'><h6>Weclome ".$_SESSION["username"]."</h6>
<p>Go to your <a href='diary.php'>diary page</a>, or <a href='logout.php'>Logout</a></p>
	</div>";


} else{



	echo "
	<div class='wrapper'>
	<h1>Secret Diary</h1>
	<h2>Store your thoughts permanently and securely</h2>
	<p id='signup'>Please sign-in:</p>";
	if (	isset($_GET["p"])	)	{	if($_GET["p"]=="wrong"	){	echo "
		<div class='alert alert-danger' role='alert'>
		<h6>wrong login or password, try again.</h6>
		</div>
	";									} else if ($_GET["p"]=="exist") { echo "<span id='exist'></span>";}
										else if ($_GET["p"]=="logout"	){	echo "<div class='alert alert-success' role='alert'><h6>You logged off successfully, log-in again:</h6></div>";}
	}
	echo"<form id='form' method='POST' action='diary.php'>
<div class='input-group'>
  <input type='text' class='form-control' placeholder='Username' aria-label='username' id='username' name='username' oninput='checkEmpty()' aria-describedby='basic-addon1'>
</div>
<div class='input-group'>
  <input type='password' class='form-control' placeholder='Password' aria-label='password' id='password' name='password' oninput='checkEmpty()' aria-describedby='basic-addon1'>
</div>
	<input type='checkbox' name='staylogged'>Remember me<br />
	<input id='button' class='btn btn-success form-control' type='submit' name='submit' value='Sign-in';'>
	</form>
	<p id='sign' onclick='toogleSignUp();'>Not signed-in? <a href=#>Sign-up</a></p>
	</div>
	";
}
?>
 </div>
 </body>
 <script>
var username = document.getElementById('username');
var password = document.getElementById('password');
var button = document.getElementById('button');

var signup = document.getElementById('signup');
var button = document.getElementById('button');
var sign = document.getElementById('sign');
var form = document.getElementById('form');
var exist = document.getElementById('exist');

checkEmpty();

if (exist.innerHTML==""){toogleSignUp();}
function toogleSignUp(){
if(signup.innerHTML == 'Interested? Sign up now!' ){
	signup.innerHTML='Please sign-in:';
	button.value='Sign-in';
	sign.innerHTML='Not signed-in? <a href=#>Sign-up</a>';
	form.action='diary.php';
} else {
	signup.innerHTML='Interested? Sign up now!';
	button.value='Sign-up';
	sign.innerHTML='Already signed up? <a href=#>Sign-in</a>';
	form.action='signup.php';
}

}
function checkEmpty(){
if (username.value=="" || password.value==""){
button.disabled=true;}
else{
button.disabled=false;
	}


}


</script>
