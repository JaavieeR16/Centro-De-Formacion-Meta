<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/8ed440f220.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilos/estilos_login.css">
        <link rel="shortcut icon" href="../logo/favicon.ico" type="image/x-icon">
        <title>Centro de Formación Meta: Paneles</title>
    </head>
    <body>
    <div class="contenedor-formulario contenedor">
            <div class="imagen-formulario2">
                
            </div>

            <form class="formulario" action="validar_panel.php" method="post">
                <div class="texto-formulario">
                    <h2>Bienvenido de nuevo</h2>
                </div>
                <div class="input">
                    <label for="usuario">D.N.I - N.I.E</label>
                    <input placeholder="Ingrese D.N.I/N.I.E" type="text" id="usuario" name="dni" required>
                </div>
                <div class="input">
                    <label for="contraseña">Contraseña</label>
                    <input placeholder="Ingrese contraseña" type="password" id="dni1" name="dni1" required>
                </div>
                <div class="input">
                    <input type="submit" value="Entrar" name="btn_login">
                </div>
            </form>
        </div>
    </body>
</html>