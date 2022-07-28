<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pgeb.css">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>Zona de espera</title>
</head>
<body>
    <?php

session_start();

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

if (!empty($usuario) && !empty($contrasena) ) {
    $conectar=mysqli_connect("localhost","root","","registros");
    $resultado=mysqli_query($conectar,"SELECT * FROM  datos WHERE usuario='$usuario' AND contrasena='$contrasena' ");
    if ($resultado->num_rows >0) {
        echo("<center><h1>usuario correcto</h1> </center>");
        $_SESSION["usuario"] = $usuario;
            header("Location: frienzone.php");
    }
    else{
        echo("<center><h1>Usuario incorrecto </h1> </center>"); 
        echo("<center><a href='login.php'>Volver al ingreso</a></center>");
    }
};

?>
</body>
</html>
