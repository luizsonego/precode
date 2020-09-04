<?php
require_once('class/funcao.class.php');
$index = new Site();
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title></title>
	<style type="text/css">
		.imghead {
			background: url('https://luizsonego.github.io/images/image1.jpg') no-repeat fixed 0px 0/ 100% auto;
			width: 100%;
			height: 500px;
		}
	</style>
</head>

<body onload="setCart()">

	<nav>
		<div class="container">
			<ul class="navbar-left">
				<li><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
			</ul>
			<!--end navbar-left -->

			<ul class="navbar-right">
				<li><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">3</span></a></li>
			</ul>
			<!--end navbar-right -->
		</div>
		<!--end container -->
	</nav>


	<div class="container">
		<div class="shopping-cart">
			<div class="shopping-cart-header">
				<i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
				<div class="shopping-cart-total">
					<span class="lighter-text">Total:</span>
					<span class="main-color-text">$2,229.97</span>
				</div>
			</div>
			<!--end shopping-cart-header -->

			<ul class="shopping-cart-items" id="item">
				
			</ul>

			<a href="#" class="button">Checkout</a>
		</div>
		<!--end shopping-cart -->
	</div>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Fluid jumbotron</h1>
			<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
		</div>
	</div>

	<div class="container">

		<section class="" id="item1">
			<div class="full-height">
				<div class="flex-container row-wrap center">
					<div class="row">
						<?php echo $index->itens(); ?>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<p class="text-center">© 2020</p>
		</footer>

	</div>

	<script>
		function setCart(){
			if(document.cookie != '') {
				document.getElementById('item').innerHTML = <?php echo $index->item(); ?>;
				
			}
		}

		function setCookie(name, value) {
			if(document.cookie != '') {
				console.log(document.cookie);
				
			}
			document.cookie = name + "=" + (value || "") + "; path=/";
		}
	</script>


</body>

</html>