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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function{
        var currentLocation=window.location.href.split('/');
        var page;

        page=currentLocation[currentLocation.length-1]; //pagina.html
        $('li .activo').removeClass('activo');
        $('.main_menu > li > a[href*="'+page+'"]').addClass('activo');
    });


</script>

<script>
    <?php if(isset($_REQUEST['errorLogin'])): ?>
    $(document).ready(function () {
        $("#login").click();
    })
    <?php endif; ?>
</script>

<!--<script>

    $(document).ready(function () {
        var current_location=window.location.href.split('/');
        var page;
        page=current_location[current_location.length - 1];
        $('.main_menu li a').removeClass('activo');
        $('.main_menu li a[href*="' + page + '"]').addClass("activo");
    })

</script>-->