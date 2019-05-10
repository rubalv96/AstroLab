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

    <div class="item-slick1 item1-slick1" style="background-image: url(images/directos/principal.jpg);">

    </div>
    <?php include "templates/flechas.php"?>
</section>

<!-- Secciones presentación -->
<section class="section-intro" id="sec">
    <div class="header-intro parallax100 t-center p-t-80 p-b-103" style="background:radial-gradient(ellipse at center, rgba(242,195,236,1) 0%, rgba(161,141,165,1) 50%, rgba(77,66,88,1) 100%);">
			<span class="tit2 p-l-15 p-r-15">
				Una ventana hacia el
			</span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            Espacio
        </h3>
    </div>

    <div class="content-intro bg-white p-t-77 p-b-133">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-t-30">
                    <!-- Block1 -->
                    <div class="blo1">
                        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ddFvjfvPnqk?autoplay=1" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="wrap-text-blo1 p-t-35">
                            <a ><h4 class="txt5 color0-hov trans-0-4 m-b-13" data-toggle="modal" data-target=".bd-example-modal-xl">
                                Directos desde la Estación Internacional
                            </h4></a>

                            <p class="m-b-20" data-toggle="modal" data-target=".bd-example-modal-xl">
                                Vive en directo las imágenes de la Estación Internacional Europea, cuando se encuentra en el lado
                                oscuro de la Tierra, el canal ofrece imágenes en vivo pregrabadas. El satélite recorre la zona luminosa
                                en 90 minutos.
                            </p>



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

