<?php

include '../controller/stockC.php';



$error = "";

$stock = null;


$stockc = new stockc();

if (
    isset($_POST["nb_casque"]) &&
    isset($_POST["nb_velo"]) &&
    isset($_POST["nb_sac"])
) {
    if (
        !empty($_POST['nb_casque']) &&
        !empty($_POST["nb_velo"]) &&
        !empty($_POST["nb_sac"])
    ) {
        $stock = new stock(
            null,
			$_POST['nb_sac'],
            $_POST['nb_velo'],
            $_POST['nb_casque']
        );
        $stockc->addstock($stock);
        header('Location: Liststock.php');
    } else {
        $error = "Missing information";
    }
}


?>
<!DOCnb_velo HTML>
<html>
	<head>


<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E_veloc &mdash; Votre site de trading préférée</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"
	>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					
					
					
					<table>
						<tr>
							<th>
								<p>&emsp;&emsp;&emsp;</p>
					   		</th>
							<th ><div>
									<p>&emsp;&emsp;&emsp;&emsp;&emsp;</p>
								   </th>
							<th><div class="col-md-12 col-offset-0 text-center">
							     	<div id="fh5co-logo"><a href="index.html">    E_veloc</a></div>
						        </div>
							</th>
						</tr>
					</table>
	
				</div>
				
			</div>
		</div>
	</nav>
	
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/nb_sac_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>stock</h1>

									

	<form action="" method="POST">
	<div class="col-md-7 col-md-pull-2 animate-box">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<p>nombre des casques </p>
								<input id="nb_casque" type="text" class="form-control" placeholder="nb_casque" name="nb_casque">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<p>nombre des sacs </p>
								<input id="nb_velo" type="text" class="form-control" placeholder="nb_sac"  name="nb_sac">
							</div>
						</div>
						<div class="col-md-6">
                        <div class="form-group">
							<p>--nombre des velos --</p>
                            <input id="nb_velo" type="text" class="form-control" placeholder="nb_velo"  name="nb_velo">
                        </div>
                    </div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Ajouter la stock" class="btn btn-primary btn-modify" placeholder="stock"  name="submit">
							</div>
					</div>
				</div>
			</div>
		</div>

    </form>

				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		








		

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-center">
				<h3> 160 Pôle Technologique 2083 Cite El Ghazala Raoued Ariana, Tunisie</h3>
			</div>
			<div class="col-md-4 text-center">
				<h2><a href="#">E_veloc</a></h2>
			</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Thanks for visiting our website. have a nice day !</small> 
						
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>