<?php 


include '../../Controller/ClientC.php';

require_once '../../model/Client.php';

$clientC = new ClientC();


          if (isset($_REQUEST['add'])) {
            $clientC = new ClientC();
          
            $date = DateTime::createFromFormat('Y-m-d', $_POST['ddn']);
            $client = new Client(1, $_POST['nom'],$_POST['prenom'],$date,$_POST['tel'],$_POST['adresse'],$_POST['etat_civil'],$_POST['pass'],"Client" );
            $clientC->AjouterClient($client);
            
           
            header('Location:login.php');
          } 
         
       else {
          echo 'error';
          //header('Location:blank.php');
      }
    
    

?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Day Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Day</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="login.php">Login</a></li>
          <li><a class="nav-link scrollto active" href="Inscrire.php">Inscription</a></li>
         
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to Day</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
<section id="section" class="section">
<script>
      document.addEventListener('DOMContentLoaded', function() {




var submitBtn = document.getElementById('submit-btn');




submitBtn.addEventListener('click', function(event) {
  var nomInput = document.getElementById('nom');
  var nomValue = nomInput.value;




  if (/^[a-zA-Z]+$/.test(nomValue)) {
    // nom input is valid
  } else {
    event.preventDefault();
    var nomErrorMsg = document.createElement('span');
    nomErrorMsg.innerText = 'Le login  ne doit contenir que des lettres.';
    nomInput.parentNode.insertBefore(nomErrorMsg, nomInput.nextSibling);
  }

  var prenomInput = document.getElementById('prenom');
var prenomValue = prenomInput.value;

if (/^[a-zA-Z]+$/.test(prenomValue)) {
  // prenom input is valid
} else {
  event.preventDefault();
  var prenomErrorMsg = document.createElement('span');
  prenomErrorMsg.innerText = 'Le login ne doit contenir que des lettres.';
  prenomInput.parentNode.insertBefore(prenomErrorMsg, prenomInput.nextSibling);
}


var telInput = document.getElementById('tel');
var telValue = telInput.value;

if (/^[0-9]{8}$/.test(telValue)) {
  // tel input is valid
} else {
  event.preventDefault();
  var telErrorMsg = document.createElement('span');
  telErrorMsg.innerText = 'Le numéro de téléphone doit contenir 8 chiffres.';
  telInput.parentNode.insertBefore(telErrorMsg, telInput.nextSibling);
}


  var emailInput = document.getElementById('email');
  var emailValue = emailInput.value;




  if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
    // email input is valid
  } else {
    event.preventDefault();
    var emailErrorMsg = document.createElement('span');
    emailErrorMsg.innerText = 'Veuillez entrer une adresse email valide.';
    emailInput.parentNode.insertBefore(emailErrorMsg, emailInput.nextSibling);
  }
});




});
</script>


  <form method="POST" action="" >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                  <div class="col-sm-10">
                    <input name="nom" id="nom" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Prenom</label>
                  <div class="col-sm-10">
                    <input name="prenom" id="prenom" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Date de naissance</label>
                  <div class="col-sm-10">
                    <input name="ddn" type="date" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input name="pass" id="pass" type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">tel</label>
                  <div class="col-sm-10">
                    <input name="tel" id="tel" type="text" class="form-control">
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
                  <div class="col-sm-10">
                    <input name="adresse" id="email" class="form-control" >
                  </div>
                </div>
              
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Etat civil</label>
                  <div class="col-sm-10">
                    <select name="etat_civil" class="form-select" aria-label="Default select example">
                     
                      <option value="Marie">Marié(e)</option>
                      <option value="Celibaitaire">Célibaitaire</option>
                      <option value="Divorcé">Divorcé(e)</option>
                    </select>
                  </div>
                </div>

               

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ajouter un client</label>
                  <div class="col-sm-10">
                    <button name="add" id="submit-btn" type="submit" class="btn btn-primary">S'inscrire</button>
                  </div>
                </div>

              </form>
    </section>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>