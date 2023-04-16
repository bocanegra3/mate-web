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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
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
            <nav class="nav nav-pills nav-fill ">
                <a class="nav-link link-success" href="./mate.php">Mate </a>
                <a class="nav-link link-success" href="./origen.php"> Origen </a>
                <a class="nav-link link-success" href="./elaboracion.php"> Elaboracion </a>
                <a class="nav-link link-success" href="./ilustraciones_mate.php"> Ilustraciones</a>
                <a class="nav-link link-success" href="./productos.php"> Productos</a>
                <a class="nav-link link-success" href="./contacto.php"> Contacto</a>
            </nav>
    </div>
    <section class="container-md text-center">
    <div><h2>tipos de mates</h4></div>     
    <ul class='nav nav-tabs light'>
        <li class="nav-item"><a class="nav-link link-secondary" href="mate.php?tipo=ma"> Mate amargo</a></li>
        <li class="nav-item"><a class="nav-link link-secondary" href="mate.php?tipo=md"> Mate dulce</a></li>
        <li class="nav-item"><a class="nav-link link-secondary" href="mate.php?tipo=mdl"> Mate de leche</a></li>
        <li class="nav-item"><a class="nav-link link-secondary" href="mate.php?tipo=mt"> Mate terere</a></li>
    </ul>  
    </section>
    <?php 
    $tipodemate="Tradición del mate";
    $caracteristicas="Representa la unión y el compartir, ayuda a socializar, facilita la generación de vínculos, alarga la charla o la promueve, acorta distancias, ayuda a intimar, distiende, informaliza. Funciona como una excusa para el encuentro: “Es típico que uno diga ¿te venís a tomar unos mates?”.";
    $img="../img/mate-1.jpg";
    if(isset($_GET['tipo'])){
        switch($_GET['tipo']){
            case "ma";
            $tipodemate = "El Clasico mate amargo";
            $caracteristicas= "En algunas partes del Cono Sur se prefiere beber mate amargo, especialmente en Paraguay, Uruguay, sur de Brasil, Argentina y Bolivia (departamento de Tarija y el Gran Chaco). Es la forma más habitual de tomar mate. También se lo conoce como cimarrón (chimarrão, en Brasil)";
            $img = "../img/mate-amargo.jpg";
            break;
            case "md";
            $tipodemate = "El mate dulce";
            $caracteristicas= "La diferencia con el mate amargo consiste en que en cada cebada se incorpora azúcar a gusto del bebedor. Esta forma de preparación es muy difundida pocas regiones de Bolivia en el Chaco de Santa Cruz, en Chuquisaca y en el departamento de Tarija, En Argentina, como en la provincia de Santiago del Estero, Córdoba (Argentina), Cuyo, Región metropolitana de Buenos Aires, entre otros. En Chile, esta forma de preparación del mate está difundida mayoritariamente en zonas rurales. La cucharadita de azúcar o miel debe caer al borde de la zanja que forma la bombilla en la yerba, no por todo el mate. Una variante es endulzar solo el primer mate para cortar el amargor del primero, suavizando así los posteriores.";
            $img = "../img/mate-dulce.jpg";
            break;
            case "mdl";
            $tipodemate = "El mate de leche";
            $caracteristicas= "La diferencia con el mate amargo es que en lugar de cebar con agua, se lo hace con leche y azúcar. Esta variante tiene la desventaja de no poder limpiar fácilmente la bombilla y el mate, por eso suelen utilizarse unos distintos a los de las variantes tradicionales. En el Paraguay, también se acostumbra a cebar lo que allí se denomina «mate dulce», que se prepara con leche caliente endulzada (o con azúcar dorada), cambiando la yerba por coco rallado, o poniendo primeramente yerba y sobre ella coco rallado.";
            $img = "../img/mate-leche.jpg";
            break;
            case "mt";
            $tipodemate = "El mate terere el preferido del verano";
            $caracteristicas= "El tereré (palabra de origen guaraní)79 es una bebida tradicional, de amplio consumo en Paraguay y algunas provincias argentinas (las del nordeste y Entre Ríos)

            Es tradicional de Paraguay donde es considerado un icono cultural y declarado como patrimonio cultural inmaterial de la humanidad por la Unesco.80​

            Una forma de tereré, consistente en una mezcla de agua bien fría con yerba mate, remedios refrescantes naturales (hierbas medicinales) y hielo. Como hierbas suelen emplearse la menta (Mentha arvensis), la menta peperina, el cedrón (Aloysia triphylla), burrito, el kokú (Allophylus edulis), la cola de caballo o las cáscaras de limón.

            La otra forma de tereré consiste en poner en un recipiente de metal tres dedos de altura de yerba mate y hielo. Preparar en una jarra o termo jugo de diversos sabores naranja, lima, limón con abundante hielo y cebarlo.

            La yerba mate es puesta en maceración en agua fría y proporciona una bebida agradable por su efecto refrescante, especialmente en jornadas con altas temperaturas, evitando así los inconvenientes del mate hervido (cocido). Esta modalidad es también utilizada en la región pampeana de Argentina.";
            $img = "../img/mate-terere.jpg";
            break;
        }
    }
    ?>
        <div class="text-center">
            <h4><?php echo $tipodemate ?></h4>
            <div>
        <img class="rounded mx-auto d-block" src="<?php echo $img ?>" alt=""> 
            </div>
            <p id="texto" class="lead"><?php echo $caracteristicas ?></p>            
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