
<!-----La página está alojada en http://astrolab.epizy.com------>
<?php include "restringido.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/head.php"?>
</head>
<body class="animsition">

<?php
require_once 'conectar.php';
$sql = "SELECT nombre, apellidos, correo, username, sexo FROM usuarios";
foreach ($db->query($sql) as $fila) {
    if($fila['username']==$_SESSION['username']){
        $nombre=$fila['nombre'];
        $apellidos=$fila['apellidos'];
        $correo=$fila['correo'];
        $username=$fila['username'];
        $sexo=$fila['sexo'];

    }

}
?>
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
							<?php if($sexo=="M"){
							            echo 'Bienvenido';
						            }
						            else{
						                echo 'Bienvenida';
						            }?>
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
        <h2 class="txt1">Mi perfil</h2>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="row p-t-25">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">


                            <?php
                            if($sexo=="M"){
                                echo '<img alt="Foto de perfil masculina" src="https://image.flaticon.com/icons/svg/145/145843.svg" class="img-circle" width="150">';
                            }

                            else{
                                echo '<img alt="Foto de perfil femenina" src="https://image.flaticon.com/icons/svg/145/145847.svg" class="img-circle" width="150">';
                             }
                            ?>

                            <h4 class="card-title m-t-10"><?php echo $nombre . " " . $apellidos?></h4>
                            <h6 class="card-subtitle">Usuario de AstroLab</h6>

                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">Correo electrónico</small>
                        <h6><?php echo $correo?></h6> <small class="text-muted p-t-30 db">Nombre de usuario</small>
                        <h6><?php echo $username?></h6>

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