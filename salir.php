<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Orangef.png" type="image/x-icon">
    <title>Hasta luego</title>
</head>
<body>
    <center>
        <h1>
            Estos es solo un hasta luego!
        </h1>
        </center>
    <div id="div">

    </div>
</body>
</html>
<?php

 session_start();
 

 session_destroy();

 header("Location: login.php")
?>