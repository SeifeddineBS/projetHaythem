<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Taxi</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<header id="header">
		<div class="header-top">
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="location.html">location</a></li>
						<li><a href="taxi.html">taxis</a></li>
						<li><a href="ajouterLivraison.php">livraison</a></li>

						<li><a href="reclamation.html">reclamation</a></li>
						<li><a href="voiture.html">voiture</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative location-banner" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="location-content col-lg-12">
					<h1 class="text-white">
						livraison
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="ajouterLivraison.php"> livraison</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-6 col-md-6 ">
					<h6 class="text-white ">For any delivery</h6>
					<h1 class="text-uppercase">
						+216 50 336 422
					</h1>

					<a href="#" class="primary-btn text-uppercase">Call for delivery</a>
				</div>
				<div class="col-lg-4  col-md-6 header-right">
					<h4 class="pb-30">Make your delivery request</h4>
					<form class="form" action="formLivraisonAjout.php" method="POST" name="ajouterLivraisonForm" onsubmit="return ajouterLivraison()">
						<div class="from-group">



							<div>
								<input style="color :white" class="form-control txt-field" type="text" name="nom" placeholder="Your nameee" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
								<input style="color :white" class="form-control txt-field" type="text" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
								<input style="color :white" class="form-control txt-field" type="text" name="telephone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
								<input style="color :white" class="form-control txt-field" type="text" name="adresse" placeholder="Adresse" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse'">
								<input style="color :white" class="form-control txt-field" type="text" name="commande" placeholder="commande" onfocus="this.placeholder = ''" onblur="this.placeholder = 'commande'">
							</div>





							<div class="form-group">

								<input type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" value="Make delivery">

							</div>




						</div>



					</form>
				</div>
			</div>
		</div>
	</section>

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
	<script src="ajouterLivraison.js"></script>

</body>

</html>