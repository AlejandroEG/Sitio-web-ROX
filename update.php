<?php
include("conexion_proyectos.php");
	
	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];

	$sql = "UPDATE proyectos SET titulo='$titulo', descripcion='$descripcion' WHERE id='$id'";
	$resultado = mysqli_query($conn,$sql);
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
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>NOTICIA MODIFICADA</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="panel_admin.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>