<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
	$query_user = "SELECT * FROM usuario WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
	$resultado_user = mysqli_query($conecta, $query_user);
	$row_user = mysqli_fetch_assoc($resultado_user);
	
	$resultado .= '<div class="form-group">';
	
	// $resultado .= '<label class="col-sm-3">ID:</label>';
	$resultado .= '<input type="hidden" name="id" class="form- control col-lg-9" value="'.$row_user['id'].'">';
	
	$resultado .= '<label class="col-sm-3">Nome:</label>';
	$resultado .=  '<input type="text" name ="first_name" class="form- control col-lg-9"   value="'.$row_user['first_name']. '" >';
	
	$resultado .= '<label class="col-sm-3">Sobrenome:</label>';
	$resultado .= '<input type="text" name="last_name" class="form- control col-lg-9" value="'.$row_user['last_name'].'"  >';
	
	$resultado .= '<label class="col-sm-3">Email:</label>';
	$resultado .= '<input type="text" name="email" class="form- control col-lg-9" value="'.$row_user['email'].'"  >';
		
    $resultado .= '<label class="col-sm-3">Nivel de Acesso:</label>';
	$resultado .= '<input type="text" name="Nivel_Acesso" class="form- control col-lg-9" value="'.$row_user['Nivel_Acesso'].'"  >';
	$resultado .= '</div>';
	
echo $resultado;
  
	
}
?>
