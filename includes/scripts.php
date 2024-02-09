</body>

</html>
<!--Bootstrap 5.2-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" async></script>
<!--JQuery 3.6.0-->
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Slick slider 1.8-->
<?php
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    echo '<script type="text/javascript" src="slick/slick.min.js"></script>';
}
?>
<!--Chart.js 4.4.1-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--DataTables 1.13-->
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/datatables.min.js"></script>
<!--Javascript propios-->
<?php
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    echo '<script src="js/slick-slider-config.js"></script>';
}
?>
<script src="js/main.js"></script>
<script src="js/cart.js"></script>