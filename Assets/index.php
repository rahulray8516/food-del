<?php 
session_start();
include'database.php';
$query = mysql_query("SELECT * from ownerdata");
if(isset($_POST['submit']))
{   
	$search = $_POST['search'];
	$query_a = mysql_query("SELECT * from ownerdata where hotel='$search'");
	$n=mysql_num_rows($query_a);
if($n==1)
{   
	$row = mysql_fetch_assoc($query_a);
	if($search==$row['hotel'])
	{     
		  echo "loading";
		  header("refresh:1; url=$row[links]");
		  exit(0);
		  // header( "refresh:1; url=2.php" );
	}
	else
	echo "Failure";
}
}
if (isset($_GET['page']))
  {
    $page = $_GET['page'] . ".php";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>swiggy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style type="text/css">
	 	.inner
	 	{
	 		overflow: hidden;
	 	}
	 </style>
</head>
<body>
	<div id="topmostj"> Welcome to Swiggy</div>
<header>
<div id="top">
	<ul>
		<li><a href="2.php">Home</li></a>
		<li><a href="">Offer</li></a>
		<li><a href="">Help</li></a>
		<li><a href="logout.php">Sign Out</li></a>
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
	<center><b>
<!-- Search Bar ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Search Restaurants::&nbsp&nbsp<input type="text" name="search" style="border-radius: 5px; height: 22px;" placeholder="search for Restaurants">
		<input type="submit" name="submit" style="border-radius:5px 5px 5px 5px;border-width: 1px;
	border-style:solid;
	border-color: gray;
	cursor:pointer;
	outline:none;" value="submit">
</form>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
</b></center>
	<div id="hotel1">
	<div id="m">	Select from the Available restaurants </div>
		<select>
			<option id="m">Mallu Dhaba</option>
			<option id="m">Hungry Bird</option>
			<option id="m">yellow Chilli</option>
		</select><br><br><br>
<!-- bootstrap uses -->
<div class="container">
<div class="row justify-content">
<?php while($row = mysql_fetch_assoc($query))
{?>
<div class="col-md-4">
<div class="card shadow" style="width: 18rem;">
<div class="inner" style="overflow: hidden;">
       <img class="card-img-top" src="<?=$row['image']?>" alt="Card image cap">
</div>
<div class="card-body text-center">
    <h5 class="card-title"><?=$row['hotel'];?></h5>
    <p class="card-text">Open 12:00-11:00<br>Take a Look</p>
    <?php echo "<a class = 'btn btn-primary' href='".$row['links']."'>"."Visit Here"."</a>"?>
 </div>
</div>
</div>
<?php } ?>
</div>
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