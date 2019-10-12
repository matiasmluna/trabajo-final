<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'login-controller.php';

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

  <footer class="section-footer bg-secondary">
          <div class="container">
            <section class="footer-top padding-top">
              <div class="row">
                <aside class="col-sm-3 col-md-3 white marginMobile">
                  <h5 class="title">Institucional</h5>
                  <ul class="list-unstyled">
                    <li> <a href="#">¿Quiénes somos?</a></li>
                    <li> <a href="#">Investor Relations</a></li>
                    <li> <a href="#">Términos y condiciones</a></li>
                    <li> <a href="#">Eventos</a></li>
                  </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white marginMobile">
                  <h5 class="title">Ayuda</h5>
                  <ul class="list-unstyled">
                    <li> <a href="#"> Entregas </a></li>
                    <li> <a href="#"> Pagos </a></li>
                    <li> <a href="#"> Cambios </a></li>
                    <li> <a href="#"> Mi Pedidos </a></li>
                  </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white marginMobile">
                  <h5 class="title">Políticas</h5>
                  <ul class="list-unstyled">
                    <li> <a href="#"> Política de Privacidad </a></li>
                    <li> <a href="#"> Política de Envio Gratis </a></li>

                  </ul>
                </aside>
                <aside class="col-sm-3">
                  <article class="white marginMobile">
                    <h5 class="title">Centro de Atención a Clientes</h5>
                    <p>
                      <strong>Teléfono: </strong> + 54 (11) 50328143 <br>
                        <strong>Interior:</strong> 0810-444-6387
                    </p>

                     <div class="btn-group white">
                        <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                        <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                        <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                    </div>
                  </article>
                </aside>
              </div> <!-- row.// -->
              <br>
            </section>
            <section class="footer-bottom row border-top-white">
              <div class="col-sm-4">
                <p class="text-white-50"> Hecho con <3 <br>  en Nordelta.</p>
              </div>
              <div class="col-sm-4 payments-and-seals-content table">
                  <ul class="payment-flag-list">
                    <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/visa.svg" title="Visa" alt="Visa"></li>
                    <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/mastercard.svg" title="Mastercard" alt="Mastercard"></li>
                    <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/amex.svg" title="American Express" alt="American Express"></li>
                    <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/naranja.svg" title="Naranja" alt="Naranja"></li><li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/visadebito.svg" title="Visa" alt="Visa"></li>
                    <li><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/svg/payment-flags/pagofacil.svg" title="Pago Fácil" alt="Pago Fácil"></li>
                    <li><a href="http://www.ahora12.gob.ar/index.php" target="_blank" class="footer-stamp-AhoraPago"><img src="https://static.netshoes.com.ar/0.0.387.9/netshoesar/images/stamp-AhoraPago.svg" title="AHORA 3y6" alt="AHORA 3y6"></a></li>
                  </ul></div>

              <div class="col-sm-4">
                <p class="text-md-right text-white-50">
          Copyright &copy  <br>
        <a href="#" class="text-white-50">Grupo 4.</a>
                </p>
              </div>
            </section> <!-- //footer-top -->
          </div><!-- //container -->
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
  <script  src="js/scriptSC.js"></script>

</html>
