<?php
session_start();
include'database.php';
$name = "mallu_dhaba";
$query = mysql_query("SELECT * from ownerdata where hotel = 'Hungry_Bird' ");
$row = mysql_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hungry Bird</title>
	<link rel="stylesheet" type="text/css" href="mallu.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="topmostj" style="font-family: 'Germania One', cursive;"> Welcome To Hungry Birds</div>
<header>
<div id="top">
	<ul>
		<li><a href="2.php">Home</li></a>
		<li><a href="">Offer</li></a>
		<li><a href="">Help</li></a>
		<li><a href="mallu.php">Visit Mallu dhaba</li></a>
		<li><a href="logout.php">Sign out</li></a>
		<li><a href="">Order fast</a></li>
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
<!--<div id="mallu" style="font-family: 'Germania One', cursive; text-align: center;">
Hungry Bird
</div>
<div  style="background-color: #1F2833;  border-radius: 5px;
    padding: 10px;
    margin: 10px;
    font-size: 15px;
  color: white;">
<pre>
  <a href="alfahm.php"><img src="alfahm.jpg" style="border-color: black;"></a>        <a href="kothu.php"><img src="kothu.jpg" style="border-color: black;"></a>         <a href="#"><img src="d.jpg" style="border-color: black;"></a>
   <c style="font-family: 'Germania One', cursive;">      Alfahm   Rs:200                                                                 Kothu    Rs:200                                              paneer   Rs:150</c>
</pre>
 </div> -->
<!-- new code -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow" style="width: 18rem;">
         
        <div class="inner">
          <img class="card-img-top" src="<?=$row['image'];?>" alt="Card image cap">
        </div>
  <div class="card-body text-center">
    <h5 class="card-title"><?=$row['itemname'];?></h5>
    <p class="card-text"><?=$row['price'];?></p>
    <a href="alfahm.php" class="btn btn-success">Click to Buy</a>
      </div>
     </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow" style="width: 18rem;">
         
        <div class="inner">
          <img class="card-img-top" src="<?=$row['image_a'];?>" alt="Card image cap">
        </div>
  <div class="card-body text-center">
    <h5 class="card-title"><?=$row['item_a'];?></h5>
    <p class="card-text"><?=$row['price_a']."Rupees";?></p>
    <a href="kothu.php" class="btn btn-success">Click to Buy</a>
      </div>
     </div>
    </div>
   </div>  
</div>

<!-- End Here -->
<div class="sideright">
    <div class="column">
    <ul>
    <li><a href="popularbrand"><b>Popular Brands<b></a><br><br></li>
    <li><a href="Offer.html"><b>Offers Around You<b></a><br><br></li>
    <li><a href="Seeall.html"><b>See All<b></a><br><br></li>
    </ul></div>
    <div class="column">
    <ul>
    <li><a href="popularbrand"><b>Varanasi<b></a><br><br></li>
    <li><a href="Offer.html"><b>Ernakulum<b></a><br><br></li>
    <li><a href="Seeall.html"><b>delhi<b></a><br><br></li>
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