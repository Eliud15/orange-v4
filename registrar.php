<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pgeb.css">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>Registro de usuario</title>
</head>
<body>
    
    <?php

$contrasena=$_POST["contrasena"];

if (!empty($contrasena)){
    $conectar=mysqli_connect("localhost","root","","registros");
    $resultado=mysqli_query($conectar,"SELECT * FROM  datos WHERE contrasena='$contrasena' ");
    if ($resultado->num_rows >0) {
        echo("<center><h1>Contraseña en uso <br>por favor ingresa  una contraseña nueva</h1> <br> <a href='registrarse.html'>Volver</a> </center>");
       
    }
    else{
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];

    $conectar=mysqli_connect("localhost","root","","registros");

    $usuario=mysqli_real_escape_string($conectar,$usuario);
    $contrasena=mysqli_real_escape_string($conectar,$contrasena);

    $resultado=mysqli_query($conectar,'INSERT INTO datos(usuario,contrasena) VALUES ("'.$usuario.'","'.$contrasena.'")');

    echo("<center><h1>Registro exitoso</h1> </center>");
    echo("<center><a href='login.php'>Ingresar</a></center>");
    }
};
?>
</body>
</html>
