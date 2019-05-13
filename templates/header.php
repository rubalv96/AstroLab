
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
							<ul class="main_menu main_menu2">
								<li >
									<a href="index.php">Home</a>
								</li>

								<li>
									<a href="vialactea.php" >Vía Láctea</a>
								</li>

								<li>
									<a href="tierra.php">La Tierra</a>
								</li>

								<li>
									<a href="mirandoalcielo.php">Mirando al cielo</a>
								</li>


                                <li>
                                    <!-- Button to Open the Modal -->
                                    <a  href="#myModal" class="trigger-btn" data-toggle="modal" data-target="#myModal">
                                        Contacto
                                    </a>
                                </li>

                                <li>
                                    <!-- Button HTML (to Trigger Modal) -->
                                    <a ><button type="button" id="login" class="btn botonEnviar" data-toggle="modal" data-target="#myModal2">
                                            Login
                                        </button></a>
                                    <a ><button type="button" id="login" class="btn botonEnviar" data-toggle="modal" data-target="#myModal3">
                                            Registro
                                        </button></a>

                                </li>


							</ul>
						</nav>
					</div>

					<!-- Barras de menu -->
					<div class="izquierda">
						<button class="btn-show-sidebar m-l-33 trans-0-4 d-lg-none "></button>
					</div>

				</div>
			</div>
		</div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="annadeSugerencia.php" method="post">

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
                                <input type="text" class="form-control" name="nombre" id="inputName" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Correo electrónico</label>
                                <input type="email" class="form-control" id="inputEmail" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Mensaje</label>
                                <textarea name="mensaje" class="form-control" id="inputMessage" rows="5" required></textarea>
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

        <!-- Modal de Login -->
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
                        <form action="./procesaLogin.php" method="post">
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

<!-- Modal de Login -->
<div id="myModal3" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="images/avatar.png" alt="Avatar">
                </div>
                <h4 class="modal-title">Regístrate como usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="./annadeUsuario.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn botonEnviar btn-lg btn-block login-btn">Registrar</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>


