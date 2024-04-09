<?php
session_start();

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$_SESSION['correo'] = $correo;

include("bd.php");

$consulta = "SELECT * FROM user WHERE correo='$correo' AND contraseña='$contraseña'";
$resultado = mysqli_query($conn, $consulta);

if ($resultado) {
    $filas = mysqli_num_rows($resultado);
    if ($filas > 0) {
        header("location:catalogo.php");
        exit();
    } else {
        // Manejo en caso de que no haya coincidencias
        echo '<script type="text/javascript">alert("verifica tus datos");location.assign("inictien.php");</script>';
    }
}

?>
