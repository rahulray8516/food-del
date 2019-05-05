<?php
session_start();
$_SESSION['flag'] = FALSE;
if (isset($_POST['submit']))
{
$_SESSION['flag'] = TRUE;
header( "refresh:1; url=register.php");

}
if(isset($_POST['existing']))
{ 
$_SESSION['flag'] = TRUE;
header( "refresh:1; url=login.php" );	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Introduction</title>
	<link rel="stylesheet" type="text/css" href="intro.css">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body style="background: url(background1.jpg) no-repeat;
-webkit-background-size: cover;
background-size: cover;
height: 50vw;">
<div class="main">
	<ul>
		<li><a class="active" href="#">Swiggy</li></a>
		<li><a class="active" href="#">Offer</li></a>
		<li><a class="active" href="#">Help</li></a>
		<li><a class="download" href="owner.php">Click! Here To Register Your Restaurant</li></a>
	</ul>
</div>

<h1>Welcome To swiggy </h1><br>
<h1>To Get Started Please Create Account / Login</h1>
<div class="box">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="submit" name="submit" value="Create account">
<input type="submit" name="existing" value="Existing User">
</form>
</div>
</body>
</html>