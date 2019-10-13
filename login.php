<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'login-controller.php';
  $pageTitle = 'Iniciar Sesión';
	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: perfildelusuario.php');
		exit;
	}

	// Generamos nuestro array de errores interno
	$errorsInLogin = [];

	// Persistimos el email
	$email = '';

	if ($_POST) {
		// Persistimos el email con lo vino por $_POST
		$email = trim($_POST['email']);

		// La función loginValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInLogin = loginValidate();

		if ( !$errorsInLogin ) {
			// Traemos al usuario que vamos a loguear
			$userToLogin = getUserByEmail($email);

			// Preguntamos si quiere ser recordado
			if ( isset($_POST['rememberUser']) ) {
				setcookie('userLoged', $email, time() + 3000);
			}

			// Logeamos al usuario
			login($userToLogin);
		}
	}

	require_once 'navbar.php';
	require_once 'header.php';

?>

<!doctype html>
<html lang="en">


  <body>

  <section>
      <div class="container">
        <form class="formulario" action="index.html" method="post">
          <h1 style="font-size: 40px">Iniciar sesión</h1>
          <div class="container">
          <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Email" name="" value="">
          </div>

          <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="" value="">
          </div>
          <input type="submit" name="" value="Iniciar sesión" class="button">
          <p>¿No tienes una cuenta?<a class="link" href="registro.php"> Registrarte.</a></p>
        </div>
      </form>
    </div>
  </section>
  </html>
<?php require_once 'footer.php'; ?>
