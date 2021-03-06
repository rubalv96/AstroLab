<!-----La página está alojada en http://astrolab.epizy.com------>

<?php include "restringidoAdmin.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php"?>
</head>
<body class="animsition">


<!-- Header -->
<header>
    <?php if(!isset($_SESSION['username'])){
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

            <div class="item-slick1 item1-slick1" style="background-image: url(images/admin/principal.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Bienvenido
						</span>

                    <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <?php echo $_SESSION['username'];?>
                    </h2>


                </div>
            </div>


        </div>
        <div >

            <?php include "templates/flechas.php"?>


        </div>			<div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Tabla de usuarios -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105" id="sec">
<!--    <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/index/navega4.jpg);">-->
<!--			<span class="tit4 p-l-15 p-r-15">-->
<!--				Bienvenido-->
<!--			</span>-->
<!---->
<!--        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">-->
<!--            --><?php
//            echo $_SESSION['username'];
//                ?>
<!--        </h3>-->
<!--    </div>-->
    <div class="container">
        <h2 class="txt1">Usuarios del sistema</h2>

        <input id="myInput" type="text" placeholder="Filtro de búsqueda" class="m-t-15 txt5" style="width:400px; background-color: #F2C3EC; color:#4D4258; text-align:center;">
        <br><br>

        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nombre de usuario</th>
                <th>Correo electrónico</th>

            </tr>
            </thead>
            <tbody id="myTable">

            <?php
            require_once 'conectar.php';

            $sql = "SELECT nombre, apellidos, correo, username, password FROM usuarios ";
            foreach ($db->query($sql) as $fila) {
                print "<tr>";
                print "<td>" . $fila['nombre'] . "</td>";
                print "<td>" . $fila['apellidos'] . "</td>";
                print "<td>" . $fila['username'] . "</td>";
                print "<td>" . $fila['correo'] . "</td>";
            }
            ?>

            </tbody>
        </table>
    </div>
</section>

<!-- Tabla de sugerencias -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105" id="sec">
    <div class="container">
        <h2 class="txt1">Sugerencias enviadas por los usuarios</h2>
        <input id="myInput" type="text" placeholder="Filtro de búsqueda" class="m-t-15 txt5" style="width:400px; background-color: #F2C3EC; color:#4D4258; text-align:center;">
        <br><br>

        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo electrónico</th>
                <th>Mensaje</th>


            </tr>
            </thead>
            <tbody id="myTable2">
            <?php
           require_once 'conectar.php';
           $sql = "SELECT nombre, correo, mensaje FROM sugerencias ";
            foreach ($db->query($sql) as $fila) {
                print "<tr>";
                print "<td>" . $fila['nombre'] . "</td>";
                print "<td>" . $fila['correo'] . "</td>";
                print "<td>" . $fila['mensaje'] . "</td>";
            }
            ?>
            </tbody>
        </table>
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