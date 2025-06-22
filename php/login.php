<?php
include('./conexion.php');
// consultas sql
$sql = "SELECT * FROM users";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado);

$errores = '';
$enviado = false;

if (isset($_POST['ingresar'])) {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($usuario)) {
        $usuario = trim($usuario);
        $usuario = stripcslashes($usuario);
        $usuario = strip_tags($usuario);
        $usuario = htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8');
    } else {
        $errores .= 'Por favor ingresa un usuario <br />';
    }

    if (!empty($password)) {
        $password = trim($password);
        $password = strip_tags($password);
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

        if (strlen($password) < 4) {
            $errores .= 'La contraseña debe tener al menos 4 caracteres <br />';
        }
    } else {
        $errores .= 'Por favor ingresa una contraseña <br />';
    }
    if (empty($errores)) {
        if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
        }
        // Recorrer resultados
        
            if($fila['usuario']===$usuario && $fila['passwd'] === $password) {
                header("Location: ./pages/inicio.php");
            } else {
                $errores .= 'Usuario o contraseña incorrectos <br />';
            }
    }
}


require("./pages/login_vista.php");
?>
