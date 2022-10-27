<?php
include("header.php");
?>
<div class="container">
    <section class="container mt-5">
        <h1 class="text-center mb-5">Nuestros servicios</h1>
        <ul class="container text-center">
            <li class="lista_productos">
                <a class="links_productos" href="servicios.php?servicio=alineacion">Alineación</a>
            </li>
            <li class="lista_productos">
                <a class="links_productos" href="servicios.php?servicio=balanceo">Balanceo</a>
            </li>
        </ul>
    </section>
    <?php
    $nombre = "";
    $descripcion = "";
    $precio = "";
    $img = "";
    if (isset($_GET['servicio'])) {
        switch ($_GET['servicio']) {
            case 'alineacion':
                $nombre = 'Alineación trasera para Auto';
                $descripcion = 'El servicio se compone de la alineación del eje trasero para el Auto.';
                $precio = 4144;
                $img = './img/alineacion.jpg';
                break;
            case 'balanceo':
                $nombre = 'Balanceo x4 Cubiertas Para Camioneta';
                $descripcion = 'El servicio se compone del Balanceo de 4 cubiertas en cualquier eje de la camioneta.';
                $precio = 30840;
                $img = './img/balanceo.jpg';
                break;
            default:
                echo "No se encontraron servicios para la opción seleccionada.";
                break;
        }
    ?>

        <div class="container mt-5 col-5 text-center">
            <h3><?php echo $nombre; ?></h3>
            <h5><?php echo "$" . $precio; ?></h5>
            <p><?php echo $descripcion; ?></p>
            <img class="img_producto" src="<?php echo $img; ?>" alt="">
        </div>
</div>
<?php //APERTURA DE PHP PARA CERRAR EL IF
    } else {
        echo "<div class='container mt-5 col-10'><p>La alineación es el proceso en el que se ajustan los neumáticos de un vehículo para que miren hacia el frente, es decir, los neumáticos de tu auto deben quedar paralelos entre sí y perpendiculares al camino. En caso de que no, tu volante tenderá a irse hacia un lado, o bien, nunca regresará a su posición original después de girarlo, lo cual tarde o temprano generará un desgaste irregular.</p><hr><p>El balanceo es un procedimiento en el cual se ajusta y se distribuye uniformemente el peso entre las llantas y las cubiertas. Cuando no se realiza el balanceo, se corre el peligro de perder miles de kilómetros de vida útil.</p></div>";
    }
?>
<!-- CIERRE DEL IF Y DEL CODIGO PHP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>