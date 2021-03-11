


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Secret Diary</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- HTML5 Shim and Respond.js IE8 support of HTML5
elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the
page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->

<style>
.navbar-brand {
font-size:1.8em;
font-weight:bold;
}
#topContainer {
background-image:url("https://acemandesigns.com/MYSQL/Mydiary/background.jpg");
height:400px;
width:100%;
 height: auto;
width:auto;
background-size:cover;
background-position: center;
}
#topRow {
margin-top:100px;
text-align:center;
}
#topRow h1 {
font-size:500%;
font-weight:bold;
}
#emailSignup {
margin-top:50px;
}

.marginTop {
margin-top:30px;
color:white;
}
.center {
text-align:center;
}
.title {
margin-top:100px;
font-size:300%;
}
.bold{
font-weight:bold;
font-size:170%;
	}
.lead{
color:white;
}
label{
color:white;
}


</style>

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a href=""class="navbar-brand"   >My Secret Diary</a>
</div>
<div class="collapse navbar-collapse">
<form class="navbar-form navbar-right"  method="post" role="form">
<div class="form-group">
<input type="email" name="loginemail" id="loginemail" placeholder="Email"class="form-control" value="" autocomplete="new-password"/>
</div>

<div class="form-group">
<input type="password" name="loginpassword" id="loginpassword"placeholder="Password"class="form-control" value="" autocomplete="new-password"/>
</div>

<input type="submit" value="Login" name="submit" class="btn btn-success" >
</form>

</div>
</div>
</div>

<div class="container contentContainer" id="topContainer">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="topRow">
<h1 class="marginTop">My Secret Diary</h1>
<p class="lead" >Your own private diary, with you wherever you go.</p>


<p class="bold marginTop">Interested? Please Sign Up!</p>

<form  method="post">

<div class="form-group">
<label for="email">Email Address:</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" autocomplete="new-password"/>
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Password" value=""autocomplete="new-password"/>
</div>

<input type="submit" value="Sign Up" name="submit"  class="btn btn-success btn-lg
marginTop" />
</form>
</div>
</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>

<!-- Include all compiled plugins (below), or include individual files as
needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
$(".contentContainer").css("min-height",$(window).height());
</script>

</body>
<script>
$(function(){
    $('.nav-tabs a:first').tab('show');/* for navbar to work*/

}); 

</script>
<script>
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});
</script>
</html>