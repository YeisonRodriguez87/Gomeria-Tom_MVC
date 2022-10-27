<?php
include("header.php");
?>
<div class="container">
    <section class="container mt-5">
        <h1 class="text-center mb-5">Nuestros productos y accesorios</h1>
        <ul class="container text-center">
            <li class="lista_productos">
                <a class="links_productos" href="productos.php?producto=neumaticos">Neumáticos</a>
            </li>
            <li class="lista_productos">
                <a class="links_productos" href="productos.php?producto=baterias">Baterías</a>
            </li>
            <li class="lista_productos">
                <a class="links_productos" href="productos.php?producto=amortiguadores">Amortiguadores</a>
            </li>
        </ul>
    </section>

    <?php
    $nombre = "";
    $descripcion = "";
    $precio = "";
    $img = "";
    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case 'neumaticos':
                $nombre = 'Neumático 245/70 R16 107S';
                $descripcion = 'NEXEN Roadian HT SUV Diseñada específicamente para tu vehículo con Rodado 16 Ancho 245 Perfil 70';
                $precio = 103192;
                $img = './img/neumatico.jpeg';
                break;
            case 'baterias':
                $nombre = 'Batería Moura Peugeot 3008 Nafta';
                $descripcion = 'Batería Moura M-28KD. Borne: D. Ah: 70. CCA (A): 700.';
                $precio = 30840;
                $img = './img/bateria.jpeg';
                break;
            case 'amortiguadores':
                $nombre = 'Amortiguador Nakata';
                $descripcion = 'HG31104 GENERAL MOTORS Corsa/Meriva Delantero Derecho';
                $precio = 23652;
                $img = './img/amortiguador.jpeg';
                break;
            default:
                echo "Error";
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
        echo "<div class='container mt-5 col-10'><h2>¡Seleccione uno de nuestros productos para ver más detalles!</h2></div>";
    }
?>
<!-- CIERRE DEL IF Y DEL CODIGO PHP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>