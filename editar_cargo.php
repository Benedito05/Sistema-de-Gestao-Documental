<?php
if(isset($_POST["cargo_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
	$query_user = "SELECT * FROM funcao WHERE id = '" . $_POST["cargo_id"] . "' LIMIT 1";
	$resultado_user = mysqli_query($conecta, $query_user);
	$row_user = mysqli_fetch_assoc($resultado_user);
	
	$resultado .= '<div class="form-group">';
	
	// $resultado .= '<label class="col-sm-3">ID:</label>';
	$resultado .= '<input type="hidden" name="id" class="form- control col-lg-9" value="'.$row_user['id'].'">';
	
	$resultado .= '<label class="col-sm-3">Função ou Cargo:</label>';
	$resultado .=  '<input type="text" name ="name" class="form- control col-lg-9" value="'.$row_user['name'].'">';
	
	
	$resultado .= '</div>';
	
echo $resultado;
  
	
}
?>
