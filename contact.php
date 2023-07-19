<?php include('loader.php'); ?> <?php include "contactDetails.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="We would love to hear from you! Your questions, comments and feedback are important to us.">
	<meta name="author" content="Tiger Consulting and Software Devt Inc">
	<title>Contact Us | Global Tiger Solutions </title>
	<!-- Favicons -->
	<link rel="icon" href="assets/img/tcsdi_icon.ico">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400&f[]=clash-grotesk@400,600,500&display=swap" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<!-- Template Main CSS File -->
	<link href="assets/css/contact-style.css" rel="stylesheet">
	<!-- =======================================================

  * Template Name: Selecao - v2.1.0

  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/

  * Author: BootstrapMade.com

  * License: https://bootstrapmade.com/license/

  ======================================================== -->
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-9144299-1');
		/* Custom Search Element API */
		(function() {
			var cx = '004381368140357569196:v38j-dz2r1k';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		})();
	</script>
</head>

<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
		<?php include "navMenu.php" ?>
	</header><!-- End Header -->
	<main id="main">
		<!-- ======= Pricing Section ======= -->
		<section id="contact" class="contact" style="padding-top: 100px !important;">
			<div class="container">
				<div class="section-title" data-aos="zoom-out">
					<!-- <h2>Pricing</h2> -->
					<p>WE WOULD LOVE TO HEAR FROM YOU!</p>
					<!--<h2>Your questions, comments and feedback are important to us. If you have any message you would like to leave us, just send us an e-mail or give us a call and we will route your concerns to relevant divisions of our company.</h2>-->
				</div>
				<br>
				<div class="container" data-aos="zoom-out">
					<p>Your questions, comments and feedback are important to us. If you have any message you would like to leave us, just send us an e-mail or give us a call and we will route your concerns to relevant divisions of our company</p>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="box featured text-center" data-aos="zoom-in">
							<h3> Sales</h3>
							<i class="las la-info" style="color: #ff689b; font-size:100px; padding-bottom: 30px;"></i>
							<p class="par">Our experts would love to help you out if you have any questions.</p>
							<span class="text-center">
								<a href="mailto:<?php echo $emailSales ?>"><?php echo $emailSales ?></a>
							</span>
							<div style="padding: 29px;"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4 mt-md-0">
						<div class="box featured text-center" data-aos="zoom-in" data-aos-delay="100">
							<h3>Help & Support</h3>
							<i class="las la-people-carry" style="color: #41cf2e; font-size:100px; padding-bottom: 30px;"></i>
							<p class="par">Do you need technical assistance or support?</p>
							<span class="text-center">
								<br>
								<a href="mailto:<?php echo $emailSupp; ?>"><?php echo $emailSupp; ?></a>
							</span>
							<div style="padding: 29px;"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
						<div class="box featured text-center" data-aos="zoom-in" data-aos-delay="200">
							<h3>Become a Partner</h3>
							<i class="las la-handshake" style="color: #e9bf06; font-size:100px; padding-bottom: 30px;"></i>
							<p class="par">We can help you boost your profits and grow your business.</p>
							<a href="mailto:<?php echo $emailPartners; ?>"><?php echo $emailPartners; ?></a>
							<a href="https://forms.gle/pXohWWhasomMH7mx8" class="btn-background my-2">Engage With Us</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
						<div class="box featured text-center" data-aos="zoom-in" data-aos-delay="300">
							<h3>Talk to Us</h3>
							<i class="las la-phone" style="color: #FF0000; font-size:100px; padding-bottom: 30px;"></i>
							<p class="par">Give us a ring as we would love to hear from you!</p>
							<a href="tel:<?php echo $directContact; ?>"><?php echo $directContact; ?></a>
							<br>
							<a href="tel:<?php echo $mobileContact; ?>"><?php echo $mobileContact; ?></a>
							<div style="padding: 29px;"></div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Pricing Section -->
	</main>
	<!-- ======= Footer ======= --> <?php include "footer.php" ?> <!-- End Footer -->
	<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<!-- Template Main JS File -->
	<script src="assets/js/contact-main.js"></script>
	<script type="text/javascript">
		$('.carousel').carousel({
			interval: 6000,
			pause: "false"
		});
	</script>
</body>

</html>