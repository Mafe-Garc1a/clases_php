<?php
session_start(); //permite guardar la informacion de inicio de sesion  para poder usuarlas en otras paginas
include_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { //verifica q sea enviado en metodo post
    $usuario = $_POST['nombre_usuario'];//obtiene  lo q lleno el usuario
    $pass_hash = $_POST['pass_hash'];
    //crea unna consulta   u = tabla usuarios   r = tabla roles
    //INNER JOIN: une ambas tablas por la columna id_rol}


    $consultaUsuario = $conexion->prepare("SELECT u.id_usuario, u.pass_hash, r.nombre_rol 
                            FROM usuarios u 
                            INNER JOIN roles r ON u.id_rol = r.id_rol 
                            WHERE u.nombre_usuario = ?");
    //s->sring  Asigna el valor a reemplazar en el ? de la consulta.
    //$usuario es el valor que va a reemplazar el ? de arriba esto se hace para evitar que accedan a los datos.
    $consultaUsuario->bind_param("s", $usuario);
    $consultaUsuario->execute();//funcion q ejecuta la consulta
    $resultado = $consultaUsuario->get_result();//guarda el resultado

    if ($resultado->num_rows === 1) { // se verifica si existe el usuario
        $fila = $resultado->fetch_assoc(); //convierte la fila en un array asociativo (nombre=juanita,rol=admin)
        //verificar contraseña
        if (hash('sha1', $pass_hash) === $fila['pass_hash']) {
            //guarda datos de la sesion
            $_SESSION['id_usuario'] = $fila['id_usuario'];
            $_SESSION['nombre_usuario'] = $usuario;
            $_SESSION['rol'] = $fila['nombre_rol'];

            // Redirigir según rol
            switch ($fila['nombre_rol']) {
                case 'admin':
                    header("Location: crud.php");
                    break;
                case 'medico':
                    header("Location: medico.php");
                    break;
                default:
                    header("Location: eps.php");
                    break;
            }
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $consultaUsuario->close();
    $conn->close();
}
?>
