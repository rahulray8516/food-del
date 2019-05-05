<?php
session_start();
include'database.php';
$name = "mallu_dhaba";
$query = mysql_query("SELECT * from ownerdata where hotel = 'mallu_dhaba' ");
$row = mysql_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MALLU DHABAS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style type="text/css">
.inner
{
  overflow: hidden;
}
.inner img
{
  transition: all 1.5s ease;
}
.inner hover img
{
  transform: scale(1.5);
}
   </style>
</head>
<body>
	<div id="topmostj"> Welcome To Swiggy</div>
<header>
<div id="top">
	<ul>
		<li><a href="2.php">Home</li></a>
		<li><a href="">Offer</li></a>
		<li><a href="">Help</li></a>
		<li><a href="#">Order fast</li></a>
		<li><a href="logout.php">Sign Out</li></a>
		<li><a href="#">Contact Us</a></li>
	</ul></header>
</div>
<div id="images"><marquee>
<div id="">
	<img src="a2.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a4.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a1.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a2.jpg">&nbsp&nbsp&nbsp&nbsp
	<img src="a3.jpg">&nbsp&nbsp&nbsp&nbsp
</div></marquee></div>
<div id="mallu">
MALLU DHABAS
</div><br><br>
<center><div class="dropdown">
 <span class="dropbtn">Click Here To Check Items</span>
  <div class="dropdown-content">
    <a href="burger.php">Burgers</a>
    <a href="paneer.php">Paneer</a>
    <a href="#">Chicken</a>
  </div>
</div></center><br><br>

<!-- BOOT STARP use -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow" style="width: 18rem;">
         
        <div class="inner">
          <img class="card-img-top" src="<?=$row['image'];?>" alt="Card image cap">
        </div>
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><?=$row['itemname'];?></p>
    <a href="burger.php" class="btn btn-success">Click to Buy</a>
      </div>
     </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow" style="width: 18rem;">
         
        <div class="inner">
          <img class="card-img-top" src="<?=$row['image_a'];?>" alt="Card image cap">
        </div>
  <div class="card-body text-center">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><?=$row['item_a'];?></p>
    <a href="paneer.php" class="btn btn-success">Click to Buy</a>
      </div>
     </div>
    </div>
   </div>  
</div>

 <!-- <div class="mn" style="width: auto; background-color: #e5e4d7"> 
	<div class="row">
  <div class="column">
    <img src=" " alt="Snow"  border="2"><br>Burger<br><br><a href="burger.php">Visit Here</a>
  </div>
  <div class="column">
    <img src="c.jpg" alt="Forest"  border="2" ><br>Paneer<br><br><a href="Paneer.php">Visit Here</a>
  </div>
  <div class="column">
    <img src="<?=$row['image'];?>"><br>
   Chicken Butter<br><br><a href="">Visit Here</a>
  </div>
</div>
</div><hr>
<div class="mn" style="width: auto; background-color: #e5e4d7">
	<div class="row">
  <div class="column">
    <img src="e.jpg"  border="2" alt="Snow"><br>Kerala Paratha<br><br><a href="">Visit Here</a>
  </div>
  <div class="column">
    <img src="f.jpg"  border="2" alt="Forest" ><br>
    mmmmmmm<br><br><a href="">Visit Here</a>
  </div>
  <div class="column">
    <img src="g.jpg" alt="Mountains"  border="2" ><br>
   b b nb n nb<br><br><a href="">Visit Here</a>
  </div>
</div>
	</div>
-->
</body>
</html>