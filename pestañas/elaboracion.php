<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATE WEB</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../img/1f9c9.png">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header ">
        <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand mate-web" id="tipografia" href="../index.php">
                    <img src="../img/1f9c9.png" alt="" width="30" height="24">
                    MATE WEB</a>
            <a class="nav-link " href="./mate.php">Mate </a>
            <a class="nav-link " href="./origen.php"> Origen </a>
            <a class="nav-link " href="#"> Elaboracion </a>
            <a class="nav-link " href="./ilustraciones_mate.php"> Ilustraciones</a>
            <a class="nav-link " href="./productos.php"> Productos</a>
            <a class="nav-link " href="./contacto.php"> Contacto</a>
            </div>
        </nav>

    </div>
    <h3 class="autor mate-web" ;>Como preparar el Mate</h3>
    <div class="container-md">

        
        <img class="rounded mx-auto d-block cebarMate" src="../img/cebar-mate.jpeg" alt="CEBAR Mate.">
        <div class="text-center">
            <p id="texto" class="lead">Para cebar un mate, se llena la calabaza con yerba hasta tres cuartos, se tapa, se agita boca abajo para que las partículas finas suban y no tapen la bombilla. Luego se añade un poco de agua tibia o fría, se deja absorber y se completa con agua caliente (70-90 °C), sin mojar la parte seca. Se inserta la bombilla tapando el extremo con el pulgar y presionando al fondo. La yerba debe quedar inclinada hacia el lado opuesto de la bombilla.

En el Noreste argentino, Paraguay y sur de Brasil se toma frío, llamado tereré, con agua o jugos. El mate puede endulzarse mezclando azúcar o edulcorante en el agua o entre cebadas. Es una costumbre social: un cebador sirve y pasa el mate en ronda, compartiendo el mismo recipiente.<br>
            </p>
            <figcaption class="blockquote-footer">https://es.wikipedia.org/wiki/Mate_(infusi%C3%B3n)#Preparaci%C3%B3n</figcaption>
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