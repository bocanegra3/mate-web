<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATE WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            <a class="nav-link " href="./elaboracion.php"> Elaboracion </a>
            <a class="nav-link " href="./ilustraciones_mate.php"> Ilustraciones</a>
            <a class="nav-link " href="./productos.php"> Productos</a>
            <a class="nav-link " href="#"> Contacto</a>
            </div>
        </nav>

    </div>
    <h2 class = "mate-web">Dejame un mensaje si queres saber mas...</h2>
<section class="form">
    <form action="enviar_consulta.php" method="post">
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control " name="nombre" placeholder="Nombre" required>

    </div>
    <div class="col-md-4 mb-3">
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>

    </div>
    <div class="col-md-4 mb-3">
      <label for="email">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" name="email"  placeholder="Coloque aqui su Mail" aria-describedby="inputGroupPrepend3" required>

      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="mensaje">Coloque aqui su mensaje</label>
    <textarea class="form-control" name="mensaje" placeholder="Escriba su consulta/mensaje" rows="3"></textarea>
  </div>
        <input type="submit" value="Enviar Formulario">
    </form>
</section>
<?php if(isset($_GET['ok'])){
    echo "<h3> Su mensaje a sido enviado con exito! </h3><br>";
    }
    ?>
    
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