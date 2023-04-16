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
                <a class="nav-link link-success" href="./productos.php"> Productos</a>
                <a class="nav-link link-success" href="./contacto.php"> Contacto</a>
            </nav>
    </div>
    <div class="container-md">

        <h3 class="autor" ;>Como preparar el Mate</h3>
        <img class="rounded mx-auto d-block" src="../img/cebar-mate.jpeg" alt="CEBAR Mate.">
        <div class="text-center">
            <p id="texto" class="lead">Para preparar un mate cebado, se coloca la yerba en un recipiente llamado mate o calabaza, hasta las tres cuartas partes del mismo. Luego se tapa con la mano, se coloca boca abajo y se lo agita (esto hace que las partículas más finas queden en la parte superior, y no obstruyan la bombilla). Se lo coloca nuevamente boca arriba y se le agrega un poco de agua tibia o fría cerca del borde. Se deja reposar algunos segundos (hasta que se absorba el agua) y se termina de llenar con agua caliente, hasta aproximadamente 7 u 8 mm del borde, cuidando de que no se moje la yerba de la superficie (el agua caliente debe estar a una temperatura cercana a 80 °C, antes del punto de ebullición). Luego de uno o dos minutos se ensilla, es decir, se coloca la bombilla tapándole la boca con el dedo pulgar y presionando firmemente hasta el fondo. Siempre tiene que quedar más yerba sobre el lado opuesto de la bombilla. Se debe tener cuidado de no remover demasiado la yerba, porque podría taparse la bombilla. La bombilla se debe inclinar en sentido contrario a donde quedó la yerba seca, es decir, para el lado del que va a tomar el mate.

Es importante destacar la temperatura que debe tener el agua a la hora de cebar el mate. En varias provincias de Argentina la temperatura del agua debe ser entre 70 y 90 °C, es decir antes de que rompa el hervor. En las provincias del Noreste argentino, en el estado de Mato Grosso del Sur en Brasil, así como en Paraguay, al mate frío se lo llama «tereré» ya que se ceba con agua fría o jugo natural de naranjas por ejemplo.

El tomar mate, se ha convertido en un hábito social que se realiza muchas veces en conjunto. Es decir que varias personas comparten el mismo mate, llenándolo completamente para cada bebedor, donde uno de ellos oficia de «cebador». Este cebador es el encargado de llenar el mate y, a modo de ronda, pasarlo al siguiente bebedor.


Pava eléctrica y mate de madera.
También es un hábito muy común endulzarlo. Esto puede hacerse de dos maneras: una de ellas es mezclar el endulzante con el agua, con lo cual se logra un sabor homogéneo; y la otra es agregar el endulzante entre cebada y cebada.<br>
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