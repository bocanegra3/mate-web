<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATEICO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="./img/1f9c9.png">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="header ">
        <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand mate-web" id="tipografia" href="./index.php">
                    <img src="./img/1f9c9.png" alt="" width="30" height="24">
                    MATEICO</a>
            <a class="nav-link " href="./pestañas/mate.php">Mate </a>
            <a class="nav-link " href="./pestañas/origen.php"> Origen </a>
            <a class="nav-link " href="./pestañas/elaboracion.php"> Elaboracion </a>
            <a class="nav-link " href="./pestañas/ilustraciones_mate.php"> Ilustraciones</a>
            <a class="nav-link " href="./pestañas/productos.php"> Productos</a>
            <a class="nav-link " href="./pestañas/contacto.php"> Contacto</a>
            </div>
        </nav>

    </div>
    <main class="mainIndex">
      <?php
        $autor = "Julio Cortázar"
        ?>
         <h3 class="autor mate-web" ;><?php echo $autor ?></h3>
         <div>
         <div class="ImgDescription"> 
        <img class="rounded mx-auto d-block imgIndex" src="img/Result1.jpg" alt="Borges tomando Mate.">
        <h6 id="texto" class="text-center"><?php echo $autor ?>, fue un escritor argentino,
         una de las grandes figuras del llamado «boom» de la literatura hispanoamericana <br>
        «Mirá, un mate es como un punto y aparte. Uno lo toma y después se puede empezar un nuevo párrafo.» Rayuela (1963).</h6>
        </div>
        <div class="text-center textJulio">
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
    </main>
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