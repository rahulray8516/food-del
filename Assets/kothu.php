<?php
session_start();
include'database.php';
$query = mysql_query("SELECT * from ownerdata where hotel = 'Hungry_Bird'");
$row = mysql_fetch_assoc($query);
if(isset($_POST['cart']))
 {    
 	$_SESSION['var'] = 2;
 // header( "refresh:1; url=cart.php" );
$biryani = $_POST['biryani'];
$_SESSION['biryani'] = $biryani;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biryani</title>
	<link rel="stylesheet" type="text/css" href="mallu.css">
	 <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
</head>
<!-- csssection -->
<style type="text/css">
button{
	color: black;
	background: rgb(100,105,21);
	border-radius: 10px;
	height: 5vh;
}
button:hover
{
		background: grey;
}
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	/*background: linear-gradient(135deg,rgb(84,13,143) 0%, rgba(250,42,143) 100%);*/
	height: 100vh;
}
</style>
<!-- html section -->
<div id="topmostj">Biryani</div>
<header>
<div id="top">
	<ul>
		<li><a href="2.php">Home</li></a>
		<li><a href="">Offer</li></a>
		<li><a href="">Help</li></a>
		<li><a href="register.php">register</li></a>
		<li><a href="intro.php">sign out</li></a>
		<li><a href="cart.php">Cart</a></li>
	</ul></header>
</div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="mn">
<img src="<?=$row['image_a'];?>"><br>
  <b> <c style="font-family: 'Germania One', cursive;"><?=$row['price_a']."&nbsp"."Rupees";?></c></b><br><br>
	<!-- <input type="submit" name="submit" value="Buy Now">&nbsp&nbsp&nbsp&nbsp -->
	<button type="submit" name="cart">Add to Cart</button>&nbsp&nbsp&nbsp&nbsp&nbsp
	Quantity:<input type="number" name="biryani" min="0" max="5" size="2" value="0">
</div>
</form>
<!-- <div id="images"><marquee> 
<div id="">
	<img src="a2.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a4.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a1.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a2.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a3.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a4.jpg">
</div></marquee></div> -->
<!--<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@bobrodriguez?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Bobby Rodriguezz"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Bobby Rodriguezz</span></a>-->
</body>
</html>