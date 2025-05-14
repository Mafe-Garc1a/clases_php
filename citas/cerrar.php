<?php
session_start(); // Inicia la sesión (es necesario para destruirla)

// Destruye todas las variables de sesión
/* Aquí se vacía el array de sesión, eliminando todas las variables de usuario almacenadas.
 */
$_SESSION = array(); 

// Si se desea destruir la cookie de sesión, también se hace
if (ini_get("session.use_cookies")) { //pregunta si se utilizan cookies para eliminar la cookie del navegador
    $params = session_get_cookie_params();//Necesitamos estos datos para poder sobrescribir la cookie correctamente y eliminarla. trae el dominio , servidor etc..
    setcookie(session_name(), '', time() - 42000, //Esta línea elimina la cookie de sesión en el navegador.Pone su tiempo de expiración en el pasado (time() - 42000), lo que le dice al navegador que la borre.
        //Usa los mismos parámetros (path, domain, etc.) para asegurarse de que se borre correctamente.
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruye la sesión
session_destroy();

// Redirige al usuario al login o a otra página
header("Location: inicio.php");
exit;//Esto garantiza que nada más se ejecute después de la redirección.
?>
