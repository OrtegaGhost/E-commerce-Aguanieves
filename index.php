<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>

    <!-- mandar llamar estilos de bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

    

<body>
    <nav>
            <?php include 'navbar.php' ?>
    </nav>

    <?php include 'fondo.php' ?>

    <div >

        <?php include 'fotos.php' ?>
        <h5 class="d-flex justify-content-center mt-5">Pagina donde prodras encontrar informacion sobre las ricas y deliciosas aguanieves.
        </h5>
        <?php include "tarjetas.php" ?>

    </div>
    
    <!-- codigo -->

    <script src="./js/bootstrap.bundle.min.js"> </script>

    <footer class="d-flex justify-content-center p-3 bg-black">

        <p class="text-white"> Creada por Emmanuel Ortega Lopez® </p>

    </footer>
</body>
</html>