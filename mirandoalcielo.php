<!-----La página está alojada en http://astrolab.epizy.com------>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "templates/head.php"?>

</head>
<body class="animsition">

<!-- Header -->
<header>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        include "templates/header.php";
    }
    else{
        include "templates/headerUser.php";
    }
    ?>

</header>

<!-- Sidebar -->
<?php include "templates/menu_desplegable.php" ?>

<!-- Foto principal -->
<section >

	<div class="item-slick1 item1-slick1" style="background-image: url(images/mirandocielo/principal.jpg);">

	</div>
    <?php include "templates/flechas.php"?>
</section>

<!-- Secciones presentación -->
<section class="section-intro" id="sec">
	<div class="header-intro parallax100 t-center p-t-80 p-b-103" style="background:radial-gradient(ellipse at center, rgba(242,195,236,1) 0%, rgba(161,141,165,1) 50%, rgba(77,66,88,1) 100%);">
			<span class="tit2 p-l-15 p-r-15">
				Explora el
			</span>

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Cielo
		</h3>
	</div>

	<div class="content-intro bg-white p-t-77 p-b-133">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
							<a href="#"><img class="imagenCielo" src="images/mirandocielo/galaxia.jpg" alt="IMG-INTRO"></a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Galaxias
							</h4></a>

							<p class="m-b-20">
								¿Qué es una galaxia? ¿Cuáles son los elementos que la forman? Si quieres saberlo, adéntrate.


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
							<a href="#"><img class="imagenCielo" src="images/mirandocielo/cometa.jpg" alt="IMG-INTRO"></a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Cometas
							</h4></a>

							<p class="m-b-20">
								Si quieres saber más sobre estos astros que de vez en cuando rozan nuestra atmósfera, sigue la ruta.

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
							<a href="#"><img class="imagenCielo" src="images/mirandocielo/estrellas.jpg" alt="IMG-INTRO"></a>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Estrellas
							</h4></a>

							<p class="m-b-20">
								Sabemos que brillan, que están lejos, algunas parpadean en la oscuridad de la noche, ¿quieres conocerlas de cerca?
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




<?php include "templates/scripts.php" ?>

</body>
</html>

