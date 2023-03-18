<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">INGRESAR PROYECTO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="titulo" class="col-sm-2 control-label">Título</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="título" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">Descripción</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="descripción de actividades" required></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="archivo" class="col-sm-2 control-label">Imagen</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="panel_admin.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>