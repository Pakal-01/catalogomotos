<?php
include("bd.php");

if(isset($_POST['registrar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass']; // Cambiado de contraseña a pass

    if (empty($nombre) || empty($correo) || empty($pass)){
        echo '<script type="text/javascript">alert("Por favor, complete los campos");location.assign("singup.php");</script>';
    } else {
        $consulta = "INSERT INTO user (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$pass')";
        $resultado = mysqli_query($conn, $consulta); // Cambiado de $conex a $conn

        if ($resultado){
            echo '<script type="text/javascript">alert("Te has registrado correctamente");location.assign("index.php");</script>';
        } else {
            ?>
            <h3 class="bad">¡Hubo un error al inscribirte!</h3>
            <?php
        }
    }
}
?>

