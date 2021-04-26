
<?php
session_start();
ob_start();
include_once("../conexao.php");
$email = $_POST['email'];
$password = md5($_POST['password']);

$result = mysqli_query($conecta, "SELECT * FROM usuario WHERE email='$email'  AND password ='$password'   LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Admin: " . $resultado['nome'];


if (empty($resultado)) {
    
    

    $_SESSION['login_erro']='<div class="alert alert-danger" style="text-align: center">
    
    <strong style="text-align: center">Verifique seu email  ou senha!</strong> 
 </div>'
 ;
    
    header("Refresh:0, ../login.php");
} else {
    
  
    //Define os valores atribuidos na sessao do usuario
    $_SESSION['UserId'] = $resultado['id'];
    $_SESSION['UserFirstName'] = $resultado['first_name'];
    $_SESSION['UserLastName'] = $resultado['last_name'];
    $_SESSION['UserPassword'] = $resultado['password'];
    $_SESSION['UserEmail'] = $resultado['email'];
    $_SESSION['UserNivel_Acesso'] = $resultado['id_funcao'];
    $_SESSION['UserFoto'] = $resultado['foto'];
    $_SESSION['UserNivel'] = $resultado['Nivel_Acesso'];
    $_SESSION['login_suc']='<div class="alert alert-success" style="text-align: center">
    
    <strong style="text-align: center">Logado com êxito! Redireccionando ao sistema...</strong> 
 </div>'
 ;
    header("Refresh:0, ../index.php");


}
?>