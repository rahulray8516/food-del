<?php
session_start();
include'database.php';
if ($_SESSION['flag']==TRUE){
if (isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cp=$_POST['cp'];

  if ($password==$cp) {
    $query=mysql_query("SELECT items from register where email='$email' ");
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT into items(email,password,name,cp) VALUES('$email','$password','$name','$cp')");
     if($q)
     {
      echo "success";
      header( "refresh:1; url=2.php" );
     }
     else
     {
       echo "fail";
     }
    }
    else
    {
      echo "email already exist!";
    }
  }
 else {
   echo "password doesn't match!";
 }
}
}
 else if($_SESSION['flag']==FALSE)
{
  header( "refresh:1; url=intro.php" );
}
 ?>

<!DOCTYPE html>
<!-- saved from url=(0030)http://localhost/form/form.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>dksdskd</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="main">
	<ul>
		<li><a class="active" href="#">Swiggy</li></a>
		<li><a class="active" href="">Offer</li></a>
		<li><a class="active" href="">Help</li></a>
		<li><a class="download" href=""> Just One Click Away!</li></a>
	</ul>
</div>
<form class="box" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<h1>Create Account</h1>
	<input type="text" name="name" placeholder="Enter name">
    <input type="text" name="email" placeholder="Enter Email Address">
	<input type="password" name="password" placeholder="Enter password">
	<input type="password" name="cp" placeholder="Enter again password">
	<input type="submit" name="submit" value="submit">
</form>

</body>
</html>