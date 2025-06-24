
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Proyecto</title>
</head>

<body>
    <main class="contenido">
        <img src="https://media.istockphoto.com/id/1331491686/es/vector/dise%C3%B1o-de-elementos.jpg?s=612x612&w=0&k=20&c=zmg79X_NSr0bbyKPO987o2hPg7pYML1g5dpHOuT_1Cs=" alt="Logo Empresa" class="logo-login">

        <form action="" method="post" class="contenido-formulario" id="formulario" onsubmit="return validarFormulario(this);">

            <h1 class="contenido-titulo">Titulo del proyecto</h1>
            <label for="usuario" class="contenido-label">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="contenido-input" placeholder="Ingrese Usuario">
            <label for="password" class="contenido-label">Contraseña</label>
            <input type="password" name="password" id="password" class="contenido-input" placeholder="Ingrese Contraseña">
            <span id="alerta" style="display:none;"></span>
            <div class="centrar-btn">
                <input type="submit" name="ingresar-btn" value="Ingresar" class="contenido-btn" id="btn-login">
                <input type="hidden" name="ingresar" value="Ingresar">
                <span class="loader"></span>
            </div>
        </form>
    </main>
</body>

<script src="./js/app.js"></script> 

</html>
