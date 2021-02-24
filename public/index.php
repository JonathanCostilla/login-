<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="include/css/l.css">

	<title>.: - - - :.</title>
</head>
<body>
		<!--  Inicio de Loader  -->

        <div class="lds-dual-ring loader" id="loader"></div>
		<script src="include/js/loader.js"></script>

		<!--  Fin de loader  -->

		<!--  Inicio de Recuadro Log in  -->

		<div class="container" id="container">
			<div class="row">
			  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
				  <div class="card-body">
					<h5 class="card-title text-center">Log In</h5>
					<form class="form-signin" action="trx/verify.php" method="POST">
					  <div class="form-label-group">
						<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
						<label for="inputEmail">Email address</label>
					  </div>
		
					  <div class="form-label-group">
						<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
						<label for="inputPassword">Password</label>
					  </div>
					  <!-- Falta la que se vea cuando esta incorrecto -->
					  <div class="div_av_login">
						  <p class="av_login">El Usuario y/o la Contraseña es incorrecta</p>
					  </div>
		<!--
					  <div class="custom-control custom-checkbox mb-3">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Remember password</label>
					  </div>
        -->
					  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>
					  <hr class="my-4">
					  <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Log in with Google</button>
					  <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Log in with Facebook</button>
					</form>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		<!--  Fin de Recuadro Log in  -->
</body>
</html>