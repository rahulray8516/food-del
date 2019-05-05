<?php
session_start();
include'database.php';
$query = mysql_query("SELECT * from ownerdata");
?>

<!DOCTYPE html>
<html>
<head>
	<title>swiggy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="topmostj"> Welcome to Swiggy</div>
<header>
<div id="top">
	<ul>
		<li><a href="2.php">Home</li></a>
		<li><a href="">Offer</li></a>
		<li><a href="">Help</li></a>
		<li><a href="intro.php">Sign Out</li></a>
		<li><a href="#">Welcome</li></a>
		<li><a href="">Cities</a></li>
	</ul></header>
</div>
<div id="images"><marquee>
<div id="">
	<img src="a2.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a4.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a1.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a2.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a3.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a4.jpg">
</div></marquee></div>
<div id="vbg">
<h1>6 Restaurants available</h1>
	</div>
	<center><b><form action="" method="">
		Search Restaurants::&nbsp&nbsp<input type="text" name="" style="border-radius: 5px; height: 22px;" placeholder="search for Restaurants" required>
		<input type="submit" style="border-radius:5px 5px 5px 5px;border-width: 1px;
	border-style:solid;
	border-color: gray;
	cursor:pointer;
	outline:none;" value="submit"></form></b></center>
	<div id="hotel1">
	<div id="m">	Select from the Available restaurants </div>
		<select>
			<option id="m">Mallu Dhaba</option>
			<option id="m">Hungry Bird</option>
			<option id="m">yellow Chilli</option>
		</select><br><br><br>
<!-- bootstrap uses -->
<div class="container">
<div class="row justify-content-center">
<?php while($row = mysql_fetch_assoc($query))
{?>
<div class="col-md-4">
	<div class="card shadow">
    <img src="<?=$row['image']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?=$row['hotel'];?></h5>
      <p class="card-text"><?=$row['hotel'];?></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <?php echo "<a class = 'btn btn-primary' href='".$row['links']."'>"."Visit Here"."</a>"?>
    </div>
  </div>
 </div>
 <?php } ?>
</div>
</div>



<!-- bootstrap end -->
	<div class="sideright">
		<div class="column">
		<ul>
		<li><a href="popularbrand"><b>Popular Brands</b></a><br><br></li>
		<li><a href="Offer.html"><b>Offers Around You</b></a><br><br></li>
		<li><a href="Seeall.html"><b>See All</b></a><br><br></li>
		</ul></div>
		<div class="column">
		<ul>
		<li><a href="popularbrand"><b>Varanasi</b></a><br><br></li>
		<li><a href="Offer.html"><b>Ernakulum</b></a><br><br></li>
		<li><a href="Seeall.html"><b>delhi</b></a><br><br></li>
		</ul>
		</div></div>
		<div id="footer">
	<ul>
		<li><a href="">About</a></li>
		<li><a href="">Carrier</a></li>
	    <li><a href="">Help</a></li>
	   	<li><a href="">Contact us</a></li>
	</ul>

&copy; 2019 swiggy.com. All Right Reserved.
</body>
</html>