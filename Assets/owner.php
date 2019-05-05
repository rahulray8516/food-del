<?php
session_start();
error_reporting(0);
include'database.php';
if(isset($_POST['submit']))
{   
	$hotel = $_POST['hotel'];
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$item_a = $_POST['item_a'];
	$price_a = $_POST['price_a'];
	$address = $_POST['address'];
	$image_a = $_FILES['image_a']['name'];
	$image = $_FILES['choosefile']['name'];
	$query = mysql_query("SELECT hotel from ownerdata");
	$n = mysql_num_rows($query);
		$temp = $_FILES['choosefile']['tmp_name'];
		$cemp = $_FILES['image_a']['tmp_name'];
		$q = mysql_query("INSERT into ownerdata(hotel,itemname,item_a,price_a,price,image,image_a,address) values ('$hotel','$itemname','$item_a','$price_a','$price','$image','$image_a','$address')");
		if($q)
		{
			/*$dir = "./profile/$hotel/images/ ";
			mkdir($dir, 0777,true);
			move_uploaded_file($temp,"./profile/$hotel/images/$image");
			echo "<img src ='profile/$hotel/images/$image'>";*/
			echo "success";
		}
		else
		echo "failure";
		
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Owner Page</title>
</head>
<body>
<h1>Want To Grow your Buisseness Welcome To Swigggy</h1>
<pre>
<!-- uploading Sections -->
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Enter name of Hotel:<input type="text" name="hotel" required="">
Enter name of item:<input type="text" name="itemname" required="">
Enter price of item:<input type="text" name="price" required="">
Upload image      :<input type="file" name="choosefile" required="">
<hr>
Enter name of item a:<input type="text" name="item_a">
Enter price of a:<input type="text" name="price_a">
Upload image      :<input type="file" name="image_a">
<hr>
Enter Address Of Restaurant:
<textarea rows="4" cols="50" placeholder="Enter Your Address" name="address"></textarea>
<input type="submit" name="submit">
</form>
<!-- ---- End---- -->
</body>
</html>