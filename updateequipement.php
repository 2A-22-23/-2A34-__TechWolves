
<?php

include '../controller/equipementC.php';



$error = "";

// create equipment
$equipement = null;

// create an instance of the controller
$equipementC = new EquipementC();

if (
    isset($_POST["matricule"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["type"]) &&
    isset($_POST["id_stock"]) &&
    isset($_POST["img"])&&
    isset($_POST["nb_like"])
) {
    if (
        !empty($_POST['matricule']) &&
        !empty($_POST['prix']) &&
        !empty($_POST["type"]) &&
        !empty($_POST['id_stock']) &&
        !empty($_POST["img"])&&
        !empty($_POST['nb_like'])
    ) {
        $equipement = new equipement(
            $_POST['matricule'],
			$_POST['img'],
            $_POST['type'],
            $_POST['prix'],
            $_POST['id_stock'],
            $_POST['nb_like']

        );
        $equipementC->updateequipement($equipement,$_POST['matricule']);
        header('Location: listequipement.php');
    } else {
        $error = "Missing information";
    }
}
?>






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

	<script
            src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"        
        ></script>


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
					   		
									<p>&emsp;&emsp;&emsp;&emsp;&emsp;</p>
								   </th>
							<th><div class="col-md-12 col-offset-0 text-center">
							     	<div id="fh5co-logo"><a href="index.html">E_veloc</a></div>
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
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Contactez Nous</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

        <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['matricule'])) {
        $equipement = $equipementC->showClient($_POST['matricule']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
    
                <tr>
                    <td>
                        <label for="matricule">Matricule:
                        </label>
                    </td>
                    <td><input type="text" name="matricule" id="matricule" value="<?php echo $equipement['matricule']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">Prix:
                        </label>
                    </td>
                    <td><input type="text" name="prix" id="prix" value="<?php echo $equipement['prix']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="img">image:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="img" value="<?php echo $equipement['img']; ?>" id="img">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">type:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="type" id="type" value="<?php echo $equipement['type']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">id du stock:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_stock" id="id_stock" value="<?php echo $equipement['id_stock']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">nb_like:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nb_like" id="nb_like" value="<?php echo $equipement['nb_like']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
	


	


		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Contactez Nous</h2>
					<p>Si vous avez des reclamations n'hésitez pas de nous contacter.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-8 animate-box">
					<h3>Notre Address</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>160 Pôle Technologique 2083 Cite El Ghazala Raoued Ariana, Tunisie</li>
						<li><i class="icon-phone3"></i>+216 52 355 540</li>
					
					</ul>
				</div>
                <div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="752" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">clients</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Transactions</span>
						</div>
						<div class="clearfix visible-sm-block visible-xs-block"></div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Echanges</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">livraisons</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-center">
				<h3> 160 Pôle Technologique 2083 Cite El Ghazala Raoued Ariana, Tunisie</h3>
			</div>
			<div class="col-md-4 text-center">
			</div>
			<div class="col-md-4 text-center">
				<p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter2"></i></a></li>
						<li><a href="https://www.facebook.com/profile.php?id=100085444026350"><i class="icon-facebook2"></i></a></li>
						<li><a href="#"><i class="icon-dribbble2"></i></a></li>
					</ul>
				</p>
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

