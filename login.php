<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>
        Zona de usuario
    </title>
</head>
<body>

<header>
    <img class="icon" src="Orange.png" alt="">
        <h1>Orange </h1>
</header>
        
    
    
    <div>
        <form action="validar.php" method="post">
            <h2>Ingresar</h2>
            <input type="text" name="usuario" id="user" class="inputs" placeholder="Usuario" autocomplete="off">
            <input type="password" name="contrasena" id="password" class="inputs" placeholder="Contraseña">
            <input type="submit" id="send"  value="Ingresar">
        </form>
    </div>
</body>
</html>