<?php
include("header.php");
?>
<main class="container mt-5">
    <h1 class="text-center mb-4">Bienvenidos a Gomería Tom!!!</h1>
    <section>
        <p>Somos una empresa familiar con ya una década de experiencia en el rubro automotriz, siempre haciendo que nuestros clientes se sientan a gusto con los servicios que les prestamos y los accesorios que les vendemos para la mayor durabilidad de sus autos. <br><br>Nos encontramos en la localidad de San Martín, provincia de Buenos Aires, si tienen alguna consulta, duda o sugerencia, no dude en contactarnos en nuestra sección de contacto.</p>
    </section>
    <section>
        <div id="carouselExampleInterval" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="./img/Foto_Carrusel_1.jpeg" class="d-block w-100" alt="Foto1">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="./img/Foto_Carrusel_2.jpeg" class="d-block w-100" alt="Foto2">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="./img/Foto_Carrusel_3.jpeg" class="d-block w-100" alt="Foto3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>