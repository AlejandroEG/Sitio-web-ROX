<?php 
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['empresa']) >= 1 && strlen($_POST['preg1']) >= 1  && strlen($_POST['preg2']) >= 1  && strlen($_POST['preg3']) >= 1  && strlen($_POST['preg4']) >= 1  && strlen($_POST['preg5']) >= 1  && strlen($_POST['preg6']) >= 1  && strlen($_POST['preg7']) >= 1  && strlen($_POST['preg8']) >= 1  && strlen($_POST['preg9']) >= 1  && strlen($_POST['preg10']) >= 1  && strlen($_POST['preg11']) >= 1) {
	    $name = trim($_POST['name']);
	    $empresa = trim($_POST['empresa']);
		$preg1 = trim($_POST['preg1']);
		$preg2 = trim($_POST['preg2']);
		$preg3 = trim($_POST['preg3']);
		$preg4 = trim($_POST['preg4']);
		$preg5 = trim($_POST['preg5']);
		$preg6 = trim($_POST['preg6']);
		$preg7 = trim($_POST['preg7']);
		$preg8 = trim($_POST['preg8']);
		$preg9 = trim($_POST['preg9']);
		$preg10 = trim($_POST['preg10']);
		$preg11 = trim($_POST['preg11']);
	    $consulta = "INSERT INTO clientes(nombre, empresa, preg1, preg2, preg3, preg4, preg5, preg6, preg7, preg8, preg9, preg10, preg11) VALUES ('$name','$empresa','$preg1','$preg2','$preg3','$preg4','$preg5','$preg6','$preg7','$preg8','$preg9','$preg10','$preg11')";
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	<script language="javascript">alert("Su opinión es valiosa y de gran ayuda para la mejora continua de nuestra Empresa. Atte Gerente General");</script>
           <?php
	    } else {
	    	?> 
	    	<script language="javascript">alert("¡Ups ha ocurrido un error!");</script>
           <?php
	    }
    }
}
?>