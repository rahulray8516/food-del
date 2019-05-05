<?php
session_start();
include'database.php';
$query = mysql_query("SELECT * from ownerdata where item_a = 'paneer'");
$row = mysql_fetch_assoc($query);
if(isset($_POST['cart']))
{  
 $_SESSION['var'] = 1;
 $quantityy = $_POST['quantityy'];
 $_SESSION['quantityy'] = $quantityy;
}
/*if(isset($_POST['butter']))
{
 $butterpaneer = $_POST['butterpaneer'];
 $_SESSION['butterpaneer'] = $butterpaneer;
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>paneer</title>
	<link rel="stylesheet" type="text/css" href="mallu.css">
	 <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
</head>
<!-- css  section -->
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
	background: url() no-repeat;
	height: 100vh;
}
</style>
<div id="topmostj">Paneer</div>
<header>
<div id="top">
	<ul>
		<li><a href="2.php">Home</a></li>
		<li><a href="">Offer</a></li>
		<li><a href="">Help</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="login.php">Sign in</a></li>
		<li><a href="cart.php">Cart</a></li>
	</ul></header>
</div>
<!--<div class="mn">
	<b>Butter Paneer Masala</b>
	<img src="paneer.jpg"><br>
   Rs 100<br>
	<button type="submit" name="cart">Add to Cart</button>&nbsp&nbsp&nbsp&nbsp&nbsp
	Quantity:<input type="number" name="quantityy" min="0" max="5" size="2" value="0">
</div>
-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<!-- panner1 -->
    <div class="mn" style=" width: 300px; background-color: #e5e4d7">
	<div class="row">
    <div class="column">
    <img src="b.jpg" alt="Snow"  border="2"><br>Paneer<br>
    <?=$row['price_a'];?><br>
	<button type="submit" name="cart">Add to Cart</button>&nbsp&nbsp&nbsp&nbsp&nbsp
	Quantity:<input type="number" name="quantityy" min="0" max="5" size="2" value="0">
    </div>
    <!-- <div class="column">
    <img src="c.jpg" alt="Forest"  border="2"><br>Paneer<br><br>
    <button type="submit" name="butterpaneer">Add to Cart</button>&nbsp&nbsp&nbsp&nbsp&nbsp
	Quantity:<input type="number" name="butter" min="0" max="5" size="2" value="0">
  </div> -->
</div>
</div>
</form>
</body>
</html>