<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instaldor</title>
</head>
<body style="display: flex; justify-content: center;">
    
    <form action="ejecutar-instalador.php">
        <h1>Instalador de la APP</h1>

        <div>Nombre servidor</div>
        <input type="text" name="servidor" >
        <br>
        <div>Nombre usuario</div>
        <input type="text" name="usuario" >
        <br>
        <div>Contraseña</div>
        <input type="text" name="contraseña" >
        <br>
        <div>Base de datos</div>
        <input type="text" name="base-de-datos" >
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>