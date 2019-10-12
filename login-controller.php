<?php
// Inicio la sesión para tener acceso a $_SESSION en todos los archivos
session_start();

// Definimos las constantes que necesitamos en nuestro proyecto, de esta manera puedo usar las mismas dentro de las funciones sin tener que usar una variable global o pasarla por parámetro
define('ALLOWED_IMAGE_FORMATS', ['jpg', 'jpeg', 'png', 'gif']);
define('IMAGE_PATH', dirname(__FILE__) . '/data/avatars/');
define('USERS_JSON_PATH', dirname(__FILE__) . '/data/users.json');


// Si está la cookie almacenada y si NO está logueda la persona:
if ( isset($_COOKIE['userLoged']) && !isLogged() ) {
  // Busco al usuario por el email que tengo almacenado en la cookie
  $theUser = getUserByEmail($_COOKIE['userLoged']);

  // Guardo en sesión al usuario que busqué anteiormente
  $_SESSION['userLoged'] = $theUser;
}

// Función traer todo del JSON
function getAllUsers() {
  // Obtengo el contenido del archivo JSON
  $fileContent = file_get_contents(USERS_JSON_PATH);

  // Decodifico el JSON a un array asociativo, importante el "true"
  $allUsers = json_decode($fileContent, true);

  // Retorno el array de usuarios
  return $allUsers;
}
 
// Función para loguear al usuario
/*
  Recibe como parámetro un array que contenga la información del usuario.
*/
function login($user) {
  // Del usuario que recibo saco la posición "password" pues no me interesa tenerla en sesión
  unset($user['password']);

  // Guardo en sesión al usuario que recibo por parámetro
  $_SESSION['userLoged'] = $user;

  // Redirecciono al perfil del usuario
  header('location: profile.php');
  exit; // Siempre, después de una redirección se recomienda hacer un exit.
}


// Función para saber si está logueado la/el usuaria/o
function isLogged() {
  // El return devuelve true o false, según lo que retorne la función isset()
  return isset($_SESSION['userLoged']);
}


// Función para preguntar si el email existe
/*
  Recibe como parámetro el email a buscar
*/
function emailExist($email) {
  // Traigo a todos los usuarios
  $allUsers = getAllUsers();

  // Recorro el array de usuarios
  foreach ($allUsers as $oneUser) {
    // Si la posición "email" del usuario en la iteración coincide con el email que pasé como parámetro
    if ($oneUser['email'] == $email) {
      return true;
    }
  }

  // Si termino de recorrer el array y no se encontró al email que pasé como parámetro
  return false;
}


// Función para validar el login
/*
  No le pasamos parámetros pues usamos la variables super global $_POST
*/
function loginValidate() {
  // Genero el array local de errores que retornaré al final
  $errors = [];

  // Trimeo los campos que recibo por $_POST
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  // Si está vacío el campo: $email
  if ( empty($email) ) {
    $errors['email'] = 'El campo email es obligatorio';
  } elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) { // Si el campo $email no es un email válido
    $errors['email'] = 'Introducí un formato de email válido';
  } elseif ( !emailExist($email) ) { // Si no existe el email
    // $errors['email'] = 'Ese correo no está registrado en nuestra base de datos';
    $errors['email'] = 'Las credenciales no coinciden';
  } else {
    // Si pasamos las 3 validaciones anteriores, busco y  obtengo al usuario con el email que llegó por $_POST
    $theUser = getUserByEmail($email);

    // Si el password que recibí por $_POST NO coincide con el password hasheado que está guardado en el usuario
    if ( !password_verify($password, $theUser['password']) ) {
      $errors['password'] = 'Las credenciales no coinciden';
    }
  }

  // Si está vacío el campo: $password
  if ( empty($password) ) {
    $errors['password'] = 'El campo password es obligatorio';
  }

  // Retorno el array de errores con los mensajes de error
  return $errors;
}


// Función para traer a 1 usuario por email
/*
  Recibe como parámetro el email que quiero buscar
*/
function getUserByEmail($email){
  // Obtengo a todos los usuarios
  $allUsers = getAllUsers();

  // Recorro el array de usuarios
  foreach ($allUsers as $oneUser) {
    // Si la posición email del usuario de esa iteración es igual al email que me pasan por parámetro
    if ($oneUser['email'] == $email) {
      // Retorno al usuario encontrado
      return $oneUser;
    }
  }
}
 ?>
