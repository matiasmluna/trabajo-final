<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'funciones/funciones.php';

	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: perfildelusuario.php');
		exit;
	}

	$pageTitle = 'Register';
	require_once 'header.php';


	// Creamos esta variable con Array vacío para que no de error al entrar por GET
	$errorsInRegister = [];

	// Variables para persitir
	$name = '';
	$email = '';

	if ($_POST) {
		// Las variables de persistencia les asigno el valor que vino de $_POST
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);

		// La función registerValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInRegister = registerValidate();

		// Si no hay errores en el registro
		// Cuando no hay errores guardo la imagen y los datos
		// if ( count($errorsInRegister) == 0 ) {
		if ( !$errorsInRegister ) {

			// Guardo la imagen y obtengo el nombre aleatorio creado
			$imgName = saveImage();

			// Creo en $_POST una posición "avatar" para guardar el nombre de la imagen
			$_POST["imagenDePerfil"] = $imgName;

			// Guardo al usuario en el archivo JSON, y me devuelve al usuario que guardó en array
			$theUser = saveUser();

			// Al momento en que se registar vamos a mantener la sesión abierta
			setcookie('userLoged', $theUser['email'], time() + 3000);

			// Logueo al usuario
			login($theUser);
		}
	}

	require_once 'navbar.php';
?>

<!doctype html>
<html lang="en">

  <body>

    <div class="contenedor">
      <form method="POST" enctype="multipart/form-data">
        <h1 style="font-size: 40px">Registrate</h1>
						<div class="input-contenedor">
							<div class="form-group">
                <i class="fas fa-user icon"></i>
								<label><b>Nombre completo:</b></label>
								<input
									type="text"
									name="name"
									class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>"
									value="<?= $name; ?>"
								>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
        				</div>
							</div>
						</div>
						<div class="input-contenedor">
							<div class="form-group"
                <i class="fas fa-envelope icon"></i>
								<label><b>Correo electrónico:</b></label>
								<input
									type="text"
									name="email"
									class="form-control <?= isset($errorsInRegister['email']) ? 'is-invalid' : null ?>"
									value="<?= $email; ?>"
								>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['email']) ? $errorsInRegister['email'] : null; ?>
        				</div>
							</div>
						</div>
						<div class="input-contenedor">
						   <div class="form-group">
                <i class="fas fa-key icon"></i>
								<label><b>Password:</b></label>
								<input
									type="password"
									name="password"
									class="form-control <?= isset($errorsInRegister['password']) ? 'is-invalid' : null ?>"
								>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['password']) ? $errorsInRegister['password'] : null; ?>
        				</div>
							</div>
						</div>
						<div class="input-contenedor">
							<div class="form-group">
                <i class="fas fa-key icon"></i>
								<label><b>Repetir Password:</b></label>
								<input
									type="password"
									name="rePassword"
									class="form-control <?= isset($errorsInRegister['rePassword']) ? 'is-invalid' : null; ?>"
								>
								<div class="invalid-feedback">
          				<?= isset($errorsInRegister['rePassword']) ? $errorsInRegister['rePassword'] : null; ?>
        				</div>
							</div>
						</div>
						<div class="input-contenedor">
							<div class="form-group">
								<label><b>Imagen de perfil:</b></label>
								<div class="custom-file">
									<input
										type="file"
									 	name="avatar"
										class="custom-file-input <?= isset($errorsInRegister['avatar']) ? 'is-invalid' : null; ?>"
									>
									<label class="custom-file-label">Choose file...</label>
									<div class="invalid-feedback">
	          				<?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
	        				</div>
								</div>
							</div>
						</div>
						<div class="input-contenedor">
							<button type="submit" class="btn btn-primary">Registrarse</button>
						</div>




           <!-- <div class="input-contenedor">
            <i class="fas fa-phone icon"></i>
            <input type="text" placeholder="Teléfono" name="telefono" value="<?= $telefonoPredeterminado ?>">
            </div>
            <?php if($_POST && isset($errores["telefono"])){ ?>
            <div class="alert alert-danger" style="height: 36px;padding-bottom: 6px;padding-top: 6px;padding-left: 10px;padding-right: 10px;margin-bottom: 8px;">
            <?php echo '<h3 class="input style-3" style="font-size:8px">' . $errores["telefono"] . "</h3>";
            }?>
            </div> -->

          <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
          <p>¿Ya tienes una cuenta?<a class="link" href="login.php"> Iniciar Sesión.</a></p>
        </div>

    </form>

<?php
  require_once 'footer.php';
 ?>
  </body>
</html>
