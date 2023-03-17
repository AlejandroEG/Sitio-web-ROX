<?php 
	
	include("conexion_proyectos.php");

	$where = "";

	$sql = "SELECT * FROM proyectos";
	$resultado = mysqli_query($conn,$sql);

?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Alejandro Espinoza Gallardo">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style ="text-align: center;">PANEL DE PROYECTOS ROX</h2>
			</div>

			<div class="row">
			<a class="btn btn-primary" href="nuevo.php">NUEVO PROYECTO</a>	
			</div>
		</div>

		<br>
		
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Título</th>
						<th>Descripción</th>
					</tr>
				</thead>

				<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)){ ?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['titulo'];?></td>
								<td><?php echo $row['descripcion'];?></td>
								<td><a href="modificar.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
					<?php } ?>	
				</tbody>
			</table>
<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
	</body>
</html>	