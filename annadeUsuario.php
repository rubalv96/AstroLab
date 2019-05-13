

<?php
require_once 'conectar.php';


$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$correo = $_REQUEST['correo'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];


$validado = (!empty($nombre) && !empty($apellidos)  && !empty($correo) && !empty($username) && !empty($password));
if (!$validado) {
    /*$error = "Los campos acrónimo $acronimo, nombre $nombre, imagen $imagen y descripción $descripcion son obligatorios";*/
    header("Location: index.php?error=$error") or die("Error al redirigir a formulario con error");;
}

/*$f = 'imagen';
$d = "images/";  // Tenemos que tener images con permiso para que escriba cualquiera
// Si trabajamos con el workspace en nuestra cuenta, el usuario de apache www-data no podrá escribir en nuestra cuenta
// si ponemos upload/ podemos no tener permisos; /tmp/upload tiene que tener permisos de escritura (chmod 777 /tmp/upload)

$error_fichero = error_procesa_fichero($f, $d);

if ($error_fichero != false) {
    header("Location: formulario_depto.php?error=$error_fichero")
    or  die("Error al redirigir a formulario con error $error_fichero");
}*/

// debería haber un fichero php con funciones para BBDD

$sql_insert = "INSERT INTO `usuarios` (nombre, apellidos, correo, username, password) " . "
			      VALUES (?, ?, ?, ?, ?)";
try {
    $sentencia = $db->prepare($sql_insert);
    $sentencia->execute(array($nombre, $apellidos, $correo, $username, $password));
}catch(PDOException $error) {
    die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}

// redirige a listado de deptos
header("Location: index.php") or die("Error al redirigir a listado");;


?>