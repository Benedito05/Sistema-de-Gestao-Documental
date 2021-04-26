<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
	$query_user = "SELECT * FROM departamento WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
	$resultado_user = mysqli_query($conecta, $query_user);
	$row_user = mysqli_fetch_assoc($resultado_user);
	
	$resultado .= '<div class="form-group">';
	
	// $resultado .= '<label class="col-sm-3">ID:</label>';
	$resultado .= '<input type="hidden" name="id" class="form- control col-lg-9" value="'.$row_user['id'].'">';
	
	$resultado .= '<label class="col-sm-3">Nome:</label>';
	$resultado .=  '<input type="text" name ="first_name" class="form- control col-lg-9"  readonly value="'.$row_user['name']. '" >';
	

	$resultado .= '</div>';
	
echo $resultado;
  
	
}
?>
