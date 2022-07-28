<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frienzone.css">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>Orange</title>
</head>
<body id="body">
<?php
session_start();
$nombre = $_SESSION["usuario"];
if (isset($_SESSION["usuario"])) {
?> 

<header>
   <img class="icon" src="Orange.png" alt="">
      <h1 class="lenguaje">
      Orange
         <h6 id="usuario">
    <?php
    echo $nombre;
    ?>
    </h6>
    </h1>    
</header>
      <!-- Cerrar sesion -->
<div class="salir" >
    <div class="nohayresultado">
        <p class="cerrars">
            ¿Quieres cerrar sesion?
        </p>
    </div>
    <button  class="cancelar">Cancelar</button>
    <button  class="aceptar">Aceptar</button>
</div>
   <main>
     <?php
     $conectar=mysqli_connect("localhost","root","","mensaje");
        $res=mysqli_query($conectar,'SELECT mensaje,nombre FROM mensaje');
        while ($mensajes=mysqli_fetch_object($res)) {
        ?> 
        <h4 >
        <?php echo($mensajes->nombre); ?> Dice: <br>
        <?php echo($mensajes->mensaje); ?> 
        </h4>
          <br>
          <br>
    <?php
        }
    ?> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   </main>
   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer> 
        <form action="enviarmensaje.php" method="post"> 
            <input type="password" name="nombre" id="nombre"  style="visibility: hidden; position: absolute;" >
            <input type="button" name="actualizar" id="actualizar" value="Actualizar">
             <input type="text" id="mensaje" name="mensaje" placeholder="Escribe aqui tu mensaje" autocomplete="off"> 
             <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
    </footer>
    <script src="friendzone.js"></script>
    <?php
    }
    else {
        header("Location: index.html");
    }
?>
</body>
</html>