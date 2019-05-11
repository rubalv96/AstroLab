
<!-----La página está alojada en http://astrolab.epizy.com------>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "templates/head.php"?>
</head>
<body class="animsition">

<!-- Header -->
<header>
	<!-- Header desktop -->
	<div class="wrap-menu-header gradient1 trans-0-4">
		<div class="container h-full">
			<div class="wrap_header trans-0-3">
				<!-- Logo -->
				<div class="logo">
					<a href="index.php">

						<img class="rounded" src="images/icons/logo_astrolab.jpg" alt="IMG-LOGO" data-logofixed="images/icons/logo_astrolab.jpg">
					</a>
				</div>

				<!-- Menu -->
				<div class="wrap_menu p-l-10 p-l-0-xl">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="vialactea.php">Vía Láctea</a>
							</li>

							<li>
								<a href="tierra.php">La Tierra</a>
							</li>

							<li>
								<a href="mirandoalcielo.php">Mirando al cielo</a>
							</li>

							<li>
								<a href="directos.php">Directos al espacio</a>
							</li>

							<li>
								<!-- Button to Open the Modal -->
								<a  href="#myModal" class="trigger-btn" data-toggle="modal" data-target="#myModal">
									Contacto
								</a>
							</li>

							<li >
								<!-- Button HTML (to Trigger Modal) -->
								<a ><button type="button" class="btn botonEnviar" data-toggle="modal" data-target="#myModal2">
									Login
								</button></a>

							</li>

						</ul>
					</nav>
				</div>

				<!-- Social -->
				<div class="social flex-w flex-l-m p-r-20">
					<!--<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>-->

					<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Sidebar -->
<aside class="sidebar trans-0-4">
	<!-- Button Hide sidebar -->
	<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>





	<!-- - -->
	<ul class="menu-sidebar p-t-95 p-b-70">
		<li class="m-b-13">
			<img id=ImagenLogo src="images/icons/logo_astrolab.jpg" class="rounded " alt="Imagen del logo">
		</li>



		<li class="t-center m-b-13">
			<a href="index.php" class="txt19">Home</a>
		</li>

		<li class="t-center m-b-13">
			<a href="vialactea.php" class="txt19">Vía Láctea</a>
		</li>

		<li class="t-center m-b-13">
			<a href="tierra.php" class="txt19">La Tierra</a>
		</li>

		<li class="t-center m-b-13">
			<a href="mirandoalcielo.php" class="txt19">Mirando al cielo</a>
		</li>

		<li class="t-center m-b-13">
			<a href="directos.php" class="txt19">Directos al espacio</a>
		</li>

		<li class="t-center m-b-33">
			<a href="contacto.php" class="txt19">Contacto</a>
		</li>



	</ul>

	<!-- - -->

</aside>

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/contacto/principal.jpg);">
	<h2 class="tit6 t-center">
		Contáctanos
	</h2>
</section>

<!-- Contact form -->
<section class="section-contact bg1-pattern p-t-90 p-b-113">
	<div class="container">
	<!--	<h3 class="tit7b t-center p-b-62 p-t-105">
			Haznos llegar tu mensaje
		</h3>-->





		<!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="resultados.php" method="post">

					<!-- Modal Header -->
					<div class="modal-header fondoHeader">
						<h1 class="modal-title colorHeader">
							Contáctanos</h1>

						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body ">
						<div class="form-group">
							<label for="inputName">Nombre</label>
							<input type="text" class="form-control" id="inputName" required>
						</div>
						<div class="form-group">
							<label for="inputEmail">Correo electrónico</label>
							<input type="email" class="form-control" id="inputEmail" required>
						</div>
						<div class="form-group">
							<label for="inputMessage">Mensaje</label>
							<textarea class="form-control" id="inputMessage" rows="5" required></textarea>
						</div>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="submit" class="btn botonEnviar btn-block"><i class="fa fa-paper-plane"></i>Envía tu mensaje</button>
						<button type="button" class="btn botonCerrar" data-dismiss="modal">Cerrar</button>
					</div>
					</form>
				</div>
			</div>
		</div>




	</div>
</section>

<!-- Modal HTML -->
<div id="myModal2" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="images/avatar.png" alt="Avatar">
				</div>
				<h4 class="modal-title">Inicia sesión</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="procesaLogin.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
					</div>
					<div class="form-group">
						<button type="submit" class="btn botonEnviar btn-lg btn-block login-btn">Iniciar sesión</button>
					</div>

					<?php if(isset($_REQUEST['errorLogin'])): ?>
						<div class="panel panel-danger">
							<div class="panel-heading">
								Error
							</div>
							<div class="panel-body">
								<p><?php echo "Nombre o contraseña incorrectos"; ?></p>
							</div>
						</div>
					<?php endif; ?>
				</form>
			</div>

		</div>
	</div>
</div>
<!-- Footer -->
<footer class="bg1">
	<div class="container p-t-40 p-b-70">
		<div class="row">
			<div class="col-sm-12 col-md-12 p-t-50">
				<!-- - -->
				<h4 class="txt13 m-b-33">
					Datos de contacto
				</h4>

				<ul class="m-b-70">


					<li class="txt14 m-b-14">
						<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
						astrolab2019@gmail.com
					</li>
				</ul>


			</div>
		</div>
	</div>


	<div class="end-footer bg2">
		<div class="container">
			<div class="flex-sb-m flex-w p-t-5 p-b-10">


				<div class="txt17 p-r-20 p-t-5 p-b-5">
					Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

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
