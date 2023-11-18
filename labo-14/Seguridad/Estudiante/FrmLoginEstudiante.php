<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="System Developer">
	<meta viewport="width=device-width, initial-scale=1">
	<title>Sistema de Evaluación Online</title>
	<link href="../../css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../../css/jquery.ui.base.css" rel="stylesheet" type="text/css" />
	<link href="../../css/jquery.ui.all.css" rel="stylesheet" type="text/css" />
	<link href="../../css/jquery.ui.theme.css" rel="stylesheet" type="text/css" />
	<script src="../../jquery/jquery.alerts.js" type="text/javascript"></script>
	<script src="../../js/javascript.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
	<div class="form-center">

		<form name="form" class="panel panel-primary">

			<input type="hidden" name="op">

			<div class="alert alert-info">
				<h4><strong>
						<center>Sistema Virtual de Evaluación en Linea</center>
					</strong></h4>
			</div>

			<div class="panel-body">

				<div>
					<center>
						<img src="../../imagenes/logosimonbolivar.jpg" width="200px" height="100px" /></td>
					</center>

				</div>
				<div class="form-horizontal" role="form">

					<div class="form-group">
						<label for="usuario" class="col-lg-3 control-label">Usuario:</label>
						<div class="col-lg-8">
							<input type="text" id="txtusu" name="txtusu" class="form-control" placeholder="Ingrese su Usuario" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="clave" class="col-lg-3 control-label">Clave:</label>
						<div class="col-lg-8">
							<input type="password" id="txtcla" name="txtcla" class="form-control" placeholder="Ingrese su Clave" value="">
						</div>
					</div>
					<hr>
					<div class="form-group text-center">

						<button type="button" class="btn btn-primary" onclick="entrar()">
							<img src="../../imagenes/candado1.png" alt="Configuracion"> Iniciar Sesión
						</button>
					</div>

					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>xxxxxxx</strong>

					</div>


				</div>
			</div>
		</form>
	</div>
</body>

</html>