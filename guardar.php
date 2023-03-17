<?php
include("conexion_proyectos.php");
	
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_FILES["archivo"]["name"];

	$sql = "INSERT INTO proyectos (titulo, descripcion, imagen) VALUES ('$titulo', '$descripcion', '$imagen')";
	$resultado = mysqli_query($conn,$sql);
	$id_insert = mysqli_insert_id($conn);

	if($_FILES["archivo"]["error"]>0){
		echo "ERROR AL CARGAR ARCHIVO";
	} else {

		$permitidos = array("image/jpg","image/jpeg", "image/png");
		$limite_kb = 200000000;

		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024) {

			$ruta = 'files/';
			$archivo = $ruta.$_FILES["archivo"]["name"];

			if(!file_exists($ruta)){
				mkdir($ruta);
			}

			if(!file_exists($archivo)){

				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

				if($resultado){
					echo "Archivo Guardado";
					} else {
					echo "Error al guardar archivo";
				}

				} else {
				echo "Archivo ya existe";
			}

			} else {
			echo "Archivo no permitido o excede el tamaño";
		}

	}

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
						<h3>NOTICIA GUARDADA</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="panel_admin.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>