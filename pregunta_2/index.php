<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos-login.css">
    <title>PREGUNTA 2</title>
</head>
<body>
    
    <section>
        <form action = "validar.php" method="post">
            <h1>Inicio</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="usuario">
                <label for="">Usuario</label>
            </div>            
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="contraseña">
                <label for="">Contraseña</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Recordar</label>
                
            </div>
            
            <button type = "submit">Iniciar</button>

        </form>
    </section>
</body>
</html>