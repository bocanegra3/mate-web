<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATE WEB</title>
    <link rel="stylesheet" href="./style.css">
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
    <link rel="icon" type="image/png" href="./img/1f9c9.png">
</head>

<body>

    <div class="head">
        <nav class="navbar navbar-dark bg-success">
            <div class="container-fluid">
                <a class="navbar-brand " id="tipografia" href="./index.php">
                    <img src="./img/1f9c9.png" alt="" width="30" height="24">
                    MATE WEB</a>
            </div>
        </nav>
        <nav class="nav nav-pills nav-fill">
            <a class="nav-link link-success" href="pestañas/mate.php">Mate </a>
            <a class="nav-link link-success" href="pestañas/origen.php"> Origen </a>
            <a class="nav-link link-success" href="pestañas/elaboracion.php"> Elaboracion </a>
            <a class="nav-link link-success" href="pestañas/ilustraciones_mate.php"> Ilustraciones</a>
            <a class="nav-link link-success" href="pestañas/productos.php"> Productos</a>
            <a class="nav-link link-success" href="pestañas/contacto.php"> Contacto</a>
        </nav>
    </div>
    <div class="container-md">
        <?php
        $autor = "Julio Cortázar"
        ?>
        
        <h3 class="autor" ;><?php echo $autor ?></h3>
        <h6 id="texto" class="text-center"><?php echo $autor ?>, fue un escritor argentino, una de las grandes figuras del llamado «boom» de la literatura hispanoamericana <br>

«Mirá, un mate es como un punto y aparte. Uno lo toma y después se puede empezar un nuevo párrafo.» Rayuela (1963).</h6>
        <img class="rounded mx-auto d-block" src="img/Result1.jpg" alt="Borges tomando Mate.">
        <div class="text-center">
            <p id="texto" class="lead">"Estudiaba el comportamiento extraordinario del mate,<br>
         la respiración de la yerba fragantemente levantada por el agua y que con la succión baja<br> hasta posarse sobre sí misma,
        perdido todo brillo y todo perfume a menos que un chorrito de agua la estimule de nuevo, pulmón argentino de repuesto para solitarios y tristes... <br>
        Pero este mate es como un indulto, che, algo increíblemente conciliatorio. Madre mía, <br>
        cuánta agua en los zapatos. Mirá,un mate es como un punto y aparte. <br>
         Uno lo toma y después se puede empezar un nuevo párrafo..."
            </p>
            <figcaption class="blockquote-footer">fragmento de "Rayuela" - Julio Cortázar</figcaption>
        </div>
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