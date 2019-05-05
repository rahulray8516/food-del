<?php
session_start();
include'database.php';
if($_SESSION['flag']==TRUE){
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query=mysql_query("SELECT * from items where email='$email' ");
  $n=mysql_num_rows($query);
  if($n==1)
  {
    $row=mysql_fetch_assoc($query);
    if ($password==$row['password'])
    {
        
        header( "refresh:1; url=2.php" );
    $_SESSION['email']=$email;
    }
    else
    { 
        echo '<script language="javascript">';
        echo 'alert("Incorrect Username or Password")';
        echo '</script>';
        echo "failure!";
    }
  }
  else {
    echo "email doesn't Exist!";
  }

}
}
else if($_SESSION['flag'] == FALSE)
{
   header( "refresh:1; url=intro.php" );
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="main">
	<ul>
		<li><a class="active" href="">Swiggy</li></a>
		<li><a class="active" href="">Offer</li></a>
		<li><a class="active" href="">Help</li></a>
		<li><a class="download" href="">One Click Away! From Destiny</li></a>
	</ul>
</div>
<form class="box" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<h1>LOGIN PAGE</h1>
	<input type="text" name="email" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Enter password">
    <input type="submit" name="submit" value="login">
</form>
</body>
</html>