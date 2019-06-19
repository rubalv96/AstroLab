
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



    <?php include "templates/menu_desplegable_control.php" ?>

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">

				<div class="item-slick1 item1-slick1" style="background-image: url(images/slides/slide1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Descubre los rincones de la
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Vía Láctea
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="vialactea.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								¡Descubre!
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/slides/slide2C.jpg);">

					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Explora el
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Cielo
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href="mirandoalcielo.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								¡Explora!
							</a>
						</div>


					</div>
				</div>


				<div class="item-slick1 item3-slick1" style="background-image: url(images/slides/slide3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Contenidos exclusivos para
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							usuarios registrados
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a data-toggle="modal" data-target="#myModal3" class="btn1 flex-c-m size1 txt3 trans-0-4">
								¡Regístrate!
							</a>
						</div>
					</div>
				</div>
			</div>
            <div >

                <?php include "templates/flechas.php"?>


            </div>			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Bienvenida -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105" id="sec">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Astronomía para curiosos
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Bienvenido
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Si la curiosidad por la Astronomía ha llamado varias veces a tu puerta, ¡estás en el sitio correcto!
							AstroLab es una web donde aprenderás disfrutando como nunca antes de la Astronomía con conceptos
							sencillos que abarcarán los grandes misterios del Universo.
						</p>



					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/bienvenida.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Secciones presentación -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/index/navega4.jpg);">
			<span class="tit4 p-l-15 p-r-15">
				Navega hacia tu
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Destino
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="mirandoalcielo.php"><img class="imagenCielo" src="images/navega1.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="vialactea.php"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Vía Láctea
								</h4></a>

								<p class="m-b-20">
									Nos sumergiremos de lleno en la galaxia a la que pertenecemos caracterizándola y explorando sus
									curiosidades así como los planetas que nos rodean, aquellos que se encuentran en nuestro querido
									Sistema Solar. ¿Te animas?
								</p>

								<a href="vialactea.php" class="txt4">
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
								<a href="tierra.php"><img class="imagenCielo" src="images/sections/tierra.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="tierra.php"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									La Tierra
								</h4></a>

								<p class="m-b-20">
									El planeta azul lleno de vida, aquel enorme desconocido para muchos, resolveremos todas las dudas relacionadas
									con las estaciones, el satélite lunar así como los famosos eclipses. ¿Quieres saber cómo se forman?
								</p>

								<a href="tierra.php" class="txt4">
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
								<a href="mirandoalcielo.php"><img class="imagenCielo" src="images/navega2.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="mirandoalcielo.php"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Mirando al cielo
								</h4></a>

								<p class="m-b-20">
									Galaxias, cometas, estrellas... infinidad de astros se encuentran ahí fuera dándonos
									la oportunidad de saber algo más sobre ellos. ¿Quieres conocerlos?
								</p>

								<a href="mirandoalcielo.php" class="txt4">
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

	<!-- Event -->
	<section class="section-event">
		<div class="wrap-slick2">
			<div class="slick2">
				<div class="item-slick2 item1-slick2" style="    background: radial-gradient(ellipse at center, rgba(242,195,236,1) 0%, rgba(161,141,165,1) 50%, rgba(77,66,88,1) 100%);
">
					<div class="wrap-content-slide2 p-t-115 p-b-208">
						<div class="container">
							<!-- - -->
							<div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Eventos
								</span>

								<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
									Astronómicos
								</h3>
							</div>

							<!-- Block2 -->
							<div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
								<!-- Pic block2 -->
								<a href="#" class="wrap-pic-blo2 bg1-blo2" style="background-image: url(images/index/eclipse.jpg);">
									<div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m t-center">
											2 de julio de 2019
										</span>
									</div>
								</a>

								<!-- Text block2 -->
								<div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
									<h4 class="tit7 t-center m-b-10">
										Eclipse total de sol
									</h4>

									<p class="t-center">
										El eclipse se verá como total en el sur del Pacífico, Chile y
										Argentina. Será visible como parcial en Sudamérica.									</p>

									<div class="flex-sa-m flex-w w-full m-t-40">
										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">

											</span>

											<span class="dis-block t-center txt8">
												Días
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">

											</span>

											<span class="dis-block t-center txt8">
												Horas
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">

											</span>

											<span class="dis-block t-center txt8">
												Minutos
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">

											</span>

											<span class="dis-block t-center txt8">
												Segundos
											</span>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>
				</div>



			</div>

			<div class="wrap-slick2-dots"></div>
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
