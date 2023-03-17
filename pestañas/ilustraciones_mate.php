<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATE WEB</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/1f9c9.png">
</head>

<body>

    <div class="head">
        <nav class="navbar navbar-dark bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" id="tipografia" href="../index.php">
                    <img src="../img/1f9c9.png" alt="" width="30" height="24">
                    MATE WEB</a>
            </div>
        </nav>
        <nav class="nav nav-pills nav-fill">
            <a class="nav-link link-success" href="./mate.php">Mate </a>
            <a class="nav-link link-success" href="./origen.php"> Origen </a>
            <a class="nav-link link-success" href="./elaboracion.php"> Elaboracion </a>
            <a class="nav-link link-success" href="./ilustraciones_mate.php"> Ilustraciones</a>
        </nav>
    </div>

    <h3 class="autor" ;>Fotografias</h3>
    <div id="imagenes">
   
        <img class="rounded mx-auto d-block img-fluid" src="../img/foto1.jpg" alt="Mate.">
        <img class="rounded mx-auto d-block img-fluid" src="../img/foto2.jpg" alt="Mate.">
        <img class="rounded mx-auto d-block img-fluid" src="../img/foto3.jpg" alt="Mate.">
        <img class="rounded mx-auto d-block img-fluid" src="../img/gauchos-mate.jpg" alt="Gauchos tomando Mate.">
    </div>
        <div class="text-center">
            <p id="texto" class="lead">
            </p>
            <figcaption class="blockquote-footer">Fotografias extraidas de la web.</figcaption>
        </div>

    <footer class="text-center">

        <div>
            <?php $create = "Franco Bocanegra";
            const CONTACTO = "franco.bocanegra@outlook.com"; ?>
            <p id="footer" class="fst-italic"> <b>®</b> <?php echo $create . "<br> <b> Contacto: </b>" .  CONTACTO; ?></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>