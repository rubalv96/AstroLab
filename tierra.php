<!-----La página está alojada en http://astrolab.epizy.com------>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "templates/head.php"?>

</head>
<body class="animsition">

<!-- Header -->
<header>
    <?php include "templates/header.php"?>
</header>

<!-- Sidebar -->
<?php include "templates/menu_desplegable.php" ?>

<!-- Foto principal -->
<section >

    <div class="item-slick1 item1-slick1" style="background-image: url(images/sections/tierra.jpg);">

    </div>
    <?php include "templates/flechas.php"?>
</section>

<!-- Secciones presentación -->
<section class="section-intro" id="sec">
	<div class="header-intro parallax100 t-center p-t-80 p-b-103"  style="background:radial-gradient(ellipse at center, rgba(242,195,236,1) 0%, rgba(161,141,165,1) 50%, rgba(77,66,88,1) 100%);">
			<span class="tit2 p-l-15 p-r-15">
				Descubre tu
			</span>

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Planeta
		</h3>
	</div>

	<div class="content-intro bg-white p-t-77 p-b-133">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="#"><img class="imagenTierra" src="images/latierra/luna.jpg" alt="IMG-INTRO"></a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								La Luna y las mareas
							</h4></a>

							<p class="m-b-20">
                            Descubre los secretos de nuestro satélite y las relaciones de la marea con la Luna.


							</p>

							<a href="#" class="txt4">
								¡Navega!
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="#"><img class="imagenTierra" src="images/latierra/estaciones.jpg" alt="IMG-INTRO"></a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Estaciones
							</h4></a>

							<p class="m-b-20">
                            Averigua el por qué de las estaciones en nuestro planeta.

							</p>

							<a href="#" class="txt4">
								¡Navega!
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-t-30">

					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="#"><img class="imagenTierra" src="images/latierra/eclipse.jpeg" alt="IMG-INTRO"></a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Eclipses
							</h4></a>

							<p class="m-b-20">
                                Adentráte en este fascinante mundo de los eclipses
							</p>

							<a href="#" class="txt4">
								¡Navega!
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

			</div>



		</div>
	</div>
</section>

<!-- Footer -->
<?php include "templates/footer.php" ?>

<!-- Back to top -->
<?php include "templates/backtotop.php" ?>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>




<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
<script type="text/javascript">
	$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>


</body>
</html>

