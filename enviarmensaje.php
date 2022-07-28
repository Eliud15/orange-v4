
<?php

 $mensaje=$_POST["mensaje"];
 $nombre=$_POST["nombre"];
 $conectar=mysqli_connect("localhost","root","","mensaje");
$mensaje=mysqli_real_escape_string($conectar,$mensaje);
$nombre=mysqli_real_escape_string($conectar,$nombre);
$resultado=mysqli_query($conectar,'INSERT INTO mensaje(mensaje,nombre) VALUES ("'.$mensaje.'","'.$nombre.'")');

echo("<center><h1>Mensaje enviado</h1> </center>");
echo("<center><button class='btn'>Volver</button></center>");
?>

<script>

    
    location.href="http://localhost/fz-main/frienzone.php"

</script>
