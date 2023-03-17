<?php
	include("conexion_proyectos.php");
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM proyectos WHERE id = '$id'";
	$resultado = mysqli_query($conn,$sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
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
				<h3 style="text-align:center">MODIFICAR NOTICIAS</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php"  autocomplete="off">
				<div class="form-group">
					<label for="titulo" class="col-sm-2 control-label">Título</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="<?php echo $row['titulo'];?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>"/>
				
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">Descripción</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" value="<?php echo $row['descripcion'];?>"  required>
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