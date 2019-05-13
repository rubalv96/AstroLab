<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4  "></button>





    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="m-b-13 ">
            <img id=ImagenLogo src="images/icons/logo_astrolab.jpg" alt="Imagen del logo" class="rounded ">
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

        <li>
            <a href="directos.php">Directos al espacio</a>
        </li>

        <li class="t-center m-b-33">
            <a  href="#myModal" class="txt-19" data-toggle="modal" data-target="#myModal">
                Contacto
            </a>
        </li>
        <li >
            <!-- Button HTML (to Trigger Modal) -->
            <?php if($_SESSION['username'] == "admin"){     ?>
                <a href="admin.php" ><button type="button" class="btn botonEnviar">
                        <?php
                        echo $_SESSION['username']; ?>
                    </button></a>
            <?php } ?>

            <?php if($_SESSION['username'] != "admin"){     ?>
                <a href="user.php" ><button type="button" class="btn botonEnviar">
                        <?php
                        echo $_SESSION['username']; ?>
                    </button></a>
            <?php } ?>
            <a href="admin.php" ><button type="button" class="btn botonEnviar">
                    <?php
                    echo "Cerrar sesión";
                    session_destroy(); ?>
                </button></a>


        </li>
    </ul>

</aside>