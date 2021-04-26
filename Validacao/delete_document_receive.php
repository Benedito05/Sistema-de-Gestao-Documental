<?php
session_start();
include_once("../conexao.php");


// $id_documento = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$id_documento= $_GET['id_documento'];

// var_dump($id_documento);
// die();
if (!empty($id_documento)) {
	$result = "DELETE FROM upload WHERE id='$id_documento'";
	$resultado_contacto = mysqli_query($conecta, $result);
	if (mysqli_affected_rows($conecta)) {

		$_SESSION['apagar_documento'] = '<div class="alert alert-success" style="text-align: center">
    
		<strong style="text-align: center">Documento Eliminado  com  Sucesso!</strong> 
	 </div>';
		// header("Location: ../documentos_enviados.php");
		echo "<script>location.replace('../documentos_recebidos.php')</script>";
	} else {

		$_SESSION['apagar_documento'] = '<div class="alert alert-danger" style="text-align: center">
    
		<strong style="text-align: center">Erro ao Eliminar Documento!</strong> 
	 </div>';
		// header("Location: ../documentos_enviados.php");
		echo "<script>location.replace('../documentos_recebidos.php')</script>";
	}
} else {
	$_SESSION['apagar_documento'] = '<div class="alert alert-warning" style="text-align: center">
    
	<strong style="text-align: center"Necessário selecionar um Documento!</strong> 
 </div>';
	// header("Location: ../documentos_enviados.php");
	echo "<script>location.replace('../documentos_recbidos.php')</script>";
}
