<?php require 'controlador.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Hash</title>
    
</head>
<body>
    <form action="" method="post" autocomplete="off">
        <h1>Registro de Usuarios</h1>

        <label for=""><h2>Usuario</h2></label>

        <input type="text" name="usuario_usu" maxlength="10">

        <label for=""><h2>Password</h2></label>
        <input type="password" name="password_usu" maxlength="18">
        
        <button type="submit" name="registro">Registro</button>

        
    </form>


</body>
</html>