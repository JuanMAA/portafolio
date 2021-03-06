<!doctype html>
<html lang="zxx">

<?php 

  $random_number = rand(1,3);
  $primary_color = null;
  $rgb_color = null;

  switch ($random_number) {
    case 1:
        $primary_color = '#173e8b';
        $rgb_color = '90deg, rgba(12,139,247,0.60) 0%, rgba(12,74,237,0.60) 35%, rgba(0,178,224,0.15) 100%';
        break;
    case 2:
        $primary_color = '#30a360'; 
        $rgb_color = '90deg, rgba(100,185,38,0.60) 0%, rgba(61,168,80,0.60) 35%, rgba(48,163,96,0.15) 100%'; 
        break;
    case 3:
        $primary_color = '#FA7E5F'; 
        $rgb_color = '90deg, rgba(247,71,12,0.60) 0%, rgba(240,122,46,0.60) 35%, rgba(247,71,12,0.15) 100%'; 
        break;
  }

?>

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- TITLES -->
	<title>Juan Mansilla Asenjo</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,600i,700,800" rel="stylesheet">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" />
	<link href="fonts/themify-icons.css" rel="stylesheet" />
	<link href="fonts/etline.css" rel="stylesheet" />
	<link href="css/plugins.css" rel="stylesheet" />
	<link href="css/lightbox.min.css" rel="stylesheet" />
	<link href="css/responsive.css" rel="stylesheet" />
	<?php include 'css/responsive.php'; ?>
	<?php include 'css/style.php'; ?>
</head>


<body data-spy="scroll" data-offset="80">

	<?php
	include 'preloader.php';
	// Modales
	include 'curriculum.php';
	include 'alumno.php';
	include 'titulo.php';
	// Navbar
	include 'navbar.php';
	// Body
	include 'sections/banner.php';
	include 'sections/about.php';
	include 'sections/education.php';
	include 'sections/personal.php';
	include 'sections/contact.php';
	// Footer
	include 'footer.php';
	?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/modernizr-2.8.3.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/animated-headline.js"></script>
	<script src="js/lightbox.min.js"></script>
	<script src="js/slick-nav.js"></script>
	<script src="js/form-contact.js"></script>
	<script src="js/scrolltopcontrol.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
	<script src="js/less@4.1.1"></script>

</body>

</html>