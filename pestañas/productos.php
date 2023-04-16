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
                <a class="navbar-brand " id="tipografia" href="../index.php">
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
    <div class="main-content">
        <h2>Venta de productos</h2>
<ul class="gallery">
<?php
  include_once ("datos_productos.php");
  include_once ("db.php");

  $link= new db();
  $sql= "SELECT producto, precio, imagen from producto order by precio ASC;";
  $stmt = $link->prepare($sql);
  $stmt->execute();
  $data=$stmt->fetchAll();

  foreach($data as $row)
  {
    ?>
    <li>
        <div class="box">
          <figure>
            <img src="<?php echo $row['imagen']?>"/>
            <figcaption>
              <h3><?php echo $row['producto']?></h3>            
              <p>
                $<?php echo $row['precio']?>
              </p>
          
            </figcaption>
          </figure>
          <button class="button" value="1">
            Añadir al carrito <span class="fa-solid fa-cart-shopping"></span>
          </button>
        </div>
      </li>
      <?php
  }
  ?>

</ul>
          
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