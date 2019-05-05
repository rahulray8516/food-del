<?php
session_start();
error_reporting(0);
include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="cart.css">
  <script type="text/javascript">
        function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
</head>
<body>
<div class="main">
	<ul>
		<li><a class="active" href="2.php">Home</li></a>
		<li><a class="active" href="hungrybird.php">Hungry Bird </li></a>
		<li><a class="active" href="mallu.php">Mallu Dhaba</li></a>
		<li><a class="download" href="#">You are in Cart</li></a>
		<li><a class="download" href="logout.php">Logout</a></li>
	</ul>
	<h1 style="font-family: 'Germania One', cursive; text-align: center; color: #fff">Items In Cart</h1>
</div><br><br><br>
<pre>
<div id="qw">
<b style="font-size: 15px;">Promo Code Available</b>
<b>
  100 Rs Flat Off!
  Min Amount is Rs 300</b>


<input type="text" value="Tasty100" id="myInput" readonly="">

<button onclick="myFunction()" id="b">Copy text</button>
</div>
</pre>
<pre>
<tr>
	<th>Item</th>                    <th>Quantity</th>                 <th>Price(in Rs)</th>
</tr>
<tr>
	<th><?php if($_SESSION['var'] == 1)
    {
    $query = mysql_query("SELECT * from ownerdata where hotel = 'mallu_dhaba' ");
	$row = mysql_fetch_assoc($query);
	$quantity = $_SESSION['quantity'];
    $quantityy = $_SESSION['quantityy'];
	$price = $quantity*$row['price'] + $quantityy*$row['price_a'];
	$_SESSION['price'] = $price;
	if($quantity!=NULL){
	echo "Burger";echo str_repeat("&nbsp",20);echo $quantity; echo str_repeat("&nbsp",22);echo $quantity*$row['price']."<br>"."<br>";}?></th>
   <th>
   	<?php if($quantityy!=NULL){
	echo "paneer";echo str_repeat("&nbsp",20);echo $quantityy; echo str_repeat("&nbsp",22);echo $quantityy*$row['price_a']."<br>"."<br>";}
echo "<th>";
echo "<br>";
echo str_repeat("&nbsp",8);echo "Total Price";echo str_repeat("&nbsp",40);  echo $price;
echo "</th>";                
	}
	if($_SESSION['var'] == 2)
    { 
    $query = mysql_query("SELECT * from ownerdata where hotel = 'Hungry_Bird' ");
	$row = mysql_fetch_assoc($query);
    $alfahm = $_SESSION['alfahm'];
    $biryani = $_SESSION['biryani'];
	$price1 = $alfahm*$row['price'] + $biryani*$row['price_a'] ;
	$_SESSION['price1'] = $price1;
	if($alfahm!=NULL){
	echo "alfahm";echo str_repeat("&nbsp",20);echo $alfahm; echo str_repeat("&nbsp",22);echo $alfahm*$row['price']."<br>"."<br>";}?></th>
   <th>
   	<?php if($biryani!=NULL){
	echo "biryani";echo str_repeat("&nbsp",20);echo $biryani; echo str_repeat("&nbsp",22);echo $biryani*$row['price_a']."<br>"."<br>";}
echo "<th>";
echo "<br>";
echo str_repeat("&nbsp",8);echo "Total Price";echo str_repeat("&nbsp",40)	;echo $price1;
echo "</th>";                
	}
?></th>
</tr>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Apply Coupon::&nbsp&nbsp<input type="text" name="coupon" style="border-radius: 5px; height: 22px;" placeholder="Enter Promocode">
		<input type="submit" name="submit" style="border-radius:5px 5px 5px 5px;border-width: 1px;
	border-style:solid;
	border-color: gray;
	cursor:pointer;
	outline:none;" value="submit">
</form>
<?php 
if($_SESSION['var'] == 1)
    { $price = $_SESSION['price'];
     if(isset($_POST['submit']))
	 {  if($price>=300)
        {
	 	$coupon = $_POST['coupon'];

	 	if($coupon == "Tasty100")
	 	{
	 	 $price = $price-100;
	 	   echo str_repeat("&nbsp",8);echo "You Have To Pay";echo str_repeat("&nbsp",40);echo $price;
	 	}
	 }
	 	else
	 		echo "Invalid Promocode!!";
	 }
    }
if($_SESSION['var'] == 2)
    {  
    	$price1 = $_SESSION['price1'];
	   if(isset($_POST['submit']))
	 {  if($price1>=300)
	 	{
	 	$coupon = $_POST['coupon'];
	 	if($coupon == "Tasty100")
	 	{ 
	 		$price1 = $price1-100;
	 		 echo str_repeat("&nbsp",8);echo "<b>"."Promocode Applied"."</b>";
	 		echo "<br>"."<br>"."<br>"."<br>";
	 	    echo str_repeat("&nbsp",8);echo "You have to pay";echo str_repeat("&nbsp",40);echo $price1;	
	 	
	 	}
	    }
	 	else
	 		echo "Invalid Promocode!!";
	 }
	}	
?>
<br><br>
                                                                                                                                                                     <a href="Payment.php" style="font-family:'Lato', sans-serif; text-decoration: none; color: red;font-size: 20px;">Click Here For Payments</a>
</pre>

</body>
</html>