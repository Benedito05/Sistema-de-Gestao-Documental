
<?php

include_once "../conexao.php";

session_start();
ob_start();






$email = $_SESSION['UserEmail'];
$password = md5( $_POST['password']);

$password_sess =($_SESSION['UserPassword']);
// var_dump($password_sess, $email);
$result = mysqli_query($conecta, "SELECT * FROM usuario WHERE email='$email' AND password ='$password_sess'  LIMIT 1");
$resultado = mysqli_fetch_assoc($result);


// $result = mysqli_query($conecta, "SELECT * FROM usuario WHERE email='$email'  AND password ='$password'   LIMIT 1");
// $resultado = mysqli_fetch_assoc($result);
// echo "Admin: " . $resultado['first_name'];



if ( $email == $_SESSION['UserEmail'] and $password_sess == $password ) {
    
  
    $_SESSION['login_lock_screen_success']='<div class="alert alert-success" style="text-align: center">
   
    <strong style="text-align: center"> Bem vindo de volta   ' .  $_SESSION['UserFirstName'] .   " "  . $_SESSION['UserLastName'].'</strong> 
 </div>'
 ;
    header("Refresh:0, ../index.php");

}else{

    $_SESSION['login_lock_screen_error']='<div class="alert alert-danger" style="text-align: center">
    
    <strong style="text-align: center">Senha Errada! Tente novamente...</strong> 
 </div>'
 ;
    header("Refresh:0, ../login_lock_screen.php");
}


 

