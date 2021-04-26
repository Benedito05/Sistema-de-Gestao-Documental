<?php
session_start();
include_once("../conexao.php");


// $id_documento = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$id= $_POST['id'];

// var_dump($id_documento);
// die();
if (!empty($id)) {
	$result = "DELETE FROM departamento WHERE id='$id'";
	$resultado_contacto = mysqli_query($conecta, $result);
	if (mysqli_affected_rows($conecta)) {

		$_SESSION['apagar_departamento'] = '<div class="alert alert-success" style="text-align: center">
    
		<strong style="text-align: center">Departamento Eliminado  com  Sucesso!</strong> 
	 </div>';
		// header("Location: ../documentos_enviados.php");
		echo "<script>location.replace('../departamentos.php')</script>";
	} else {

		$_SESSION['apagar_departamento'] = '<div class="alert alert-danger" style="text-align: center">
    
		<strong style="text-align: center">Erro ao Eliminar Departamento!</strong> 
	 </div>';
		// header("Location: ../documentos_enviados.php");
		echo "<script>location.replace('../departamentos.php')</script>";
	}
} else {
	$_SESSION['apagar_departamento'] = '<div class="alert alert-warning" style="text-align: center">
    
	<strong style="text-align: center"Necessário selecionar um Departamento!</strong> 
 </div>';
	// header("Location: ../documentos_enviados.php");
	echo "<script>location.replace('../departamentos.php')</script>";
}
