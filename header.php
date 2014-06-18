<!DOCTYPE html>
<head>
	<title>AmeriPros</title>
	<link rel="stylesheet" href="css/general.css" />
</head>
<body>
<?php 
	include('ameripros_function.php');
	$obj = new transaction();
?>
<div class="wrapper">
	<div class="content">
		<div class="language">
			<img src="img/static/kh_flag.png"/>
			<img src="img/static/us_flag.png" />
		</div><br/>
		<div class="top-link">
			<a href="about_us.php">About us</a> |
			<a href="contact_us.php">Contact us</a> | 
			<a href="FAQ.php">FAQ</a> 
			<input type="text" placeholder="Search" />
			<button>Search</button>
		</div>
		<div class="menu">
			<ul class="top-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="partner.php">Partner</a></li>
				<li><a href="customer.php">Customers</a></li>
				<li><a href="promotion.php">Promotions</a></li>
				<li><a style="border-right: none" href="order.php">Order</a></li>
			</ul>
		</div><br/><br/><br/>
		<div class="main-content">
			<label class="title"><?php echo ucwords(str_replace('_',' ',basename($_SERVER['REQUEST_URI'],'.php'))); ?></label>
			<hr><br/>