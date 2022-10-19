<?php
include("header.php");
?>
<div class="container col-5 mt-5">
    <h1 class="text-center mb-4">Contactanos</h1>
    <form action="./enviar.php" method="post">
        <div class="mb-3">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" aria-label="readonly input example" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="text" name="apellido" placeholder="Apellido" aria-label="readonly input example" required>
        </div>
        <div class="mb-3">
            <input type="email" name="correo" placeholder="Correo Electrónico" class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="mensaje" placeholder="Escriba su consulta" rows="4" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">Enviar consulta</button>
        </div>
    </form>
</div>
<?php
if (isset($_GET['e'])) {
    echo "<script>alert('Mensaje enviado con éxito, nos pondremos en contacto a la brevedad')</script>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>