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
            </nav>
    </div>
    <div class="container-md">
        <h3 class="autor" ;>El origen del Mate(infucion)</h3>
        <img class="rounded mx-auto d-block" src="../img/mate-destacada.jpg" alt="Mate.">
        <div class="text-center">
            <p id="texto" class="lead">El mate es una infusión hecha con hojas de yerba mate (Ilex paraguariensis), planta originaria de las cuencas de los ríos Paraguay y Paraná, en Sudamérica.​ Estas plantas previamente secadas, cortadas y molidas forman la yerba mate, la cual tiene sabor amargo debido a los taninos de sus hojas. Por esto, hay quienes gustan de endulzar un poco el mate con azúcar, stevia o endulzante no calórico, pero comúnmente se toma amargo. La espuma que se genera al «cebar» se debe a los glucósidos que la yerba mate contiene. Es consumido en América desde la época prehispánica por algunas etnias de origen tupí-guaraní, como los avá, los mbyá y los kaiowa, y también, en menor medida, por otras etnias que realizaban comercio con ellos, como los ñandevá, los taluhets (pampas antiguos) y los qom (tobas).
                Fue adoptado rápidamente por los colonizadores españoles y quedó como parte del acervo cultural principalmente en Argentina, Paraguay, Uruguay, sur y oriente de Bolivia, sur de Brasil y Chile, especialmente en el centro y sur del país (entre Santiago y Magallanes). A su vez, es consumido normalmente en Siria (el mayor importador de yerba mate en el mundo) y Líbano.Como sucede con el té, el café o el chocolate, posee un efecto estimulante debido a la cafeína que contiene.Anteriormente, y en forma popular, se pensaba que tenía un energizante similar pero no igual, al que se llamaba «mateína».
                Además se le suma un efecto diurético, que es compensado por el alto consumo de agua que se realiza cuando se «matea», resultando así una infusión digestiva, depuradora y ―al poseer antioxidantes― preservadora del organismo. Como las otras infusiones mencionadas, el mate tiene cierta acidez, razón por la que muchas veces se le añaden ―en escasas proporciones― otras hierbas (digestivas, reguladoras de la función hepática, sedantes, etc.) que logran neutralizar la acidez[cita requerida] como también compensar el ligero efecto estimulante de la cafeína.​[cita requerida]
                Tradicionalmente, se bebe caliente mediante un sorbete denominado bombilla colocado en un pequeño recipiente, que es denominado ―según la zona― «mate», «cuia», «porongo» o «guampa», que contiene la infusión.
                Mate amargo cebado con montañita de yerba seca y agua caliente a aproximadamente 80 °C.
                Mate sin montañita de yerba seca recién cebado.
                Antes de poner la bombilla, se moja la yerba y se deja reposar unos minutos.
                Esperando que se hinche la yerba
                Por lo común se distingue al recipiente llamado porongo del llamado «mate» por ser el primero de mayores dimensiones y de boca ancha. Aunque se obtienen normalmente del porongo (Lagenaria siceraria), una cucurbitácea cuyo fruto tiene una corteza fuerte y leñosa apta para ser usada como recipiente, desde tiempos virreinales se han realizado mates de plata, cuerno vacuno (guampa), porcelana, vidrio o madera (en general quebracho o palo santo) o pezuña de toro labrada.<br></p>
            <figcaption class="blockquote-footer">https://es.wikipedia.org/wiki/Mate_(infusi%C3%B3n)</figcaption>
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