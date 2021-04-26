<?php
session_start();
include_once("../conexao.php");


// $result = mysqli_query($conecta, "SELECT * FROM usuario where id ='$id' ");
// $resultado = mysqli_fetch_assoc($result);
// $senha_banco = $resultado['password'];

$file = $_FILES;
$id = $_POST["id"];
$first_name = filter_var($_POST['first_name']);
$last_name = $_POST['last_name'];
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password_antiga = md5($_POST['password_actual']);
$password = md5($_POST['password_nova']);
$password_again = md5($_POST['confir_password']);



if(empty($file["arquivo"]["type"])){

$query = mysqli_query($conecta, "UPDATE usuario  set first_name = '$first_name',  last_name = '$last_name',  email = '$email',  password = '$password_antiga'  , updated_at = NOW() where id = '$id'  ");

if (mysqli_affected_rows($conecta) != 0) {
    echo "editado com sucesso";

    header("Location: ../index.php");
} else {
    // echo "erro ao editar";
    // header("Location: ../perfil.php");

}

}

else{
    if (isset($_FILES['arquivo'])) {
$extensao = strtolower(strchr($_FILES['arquivo']['name'], '.'));
$novonome = rand(10, 15) . (time()) . $extensao;
$diretorio = "../assets/foto/";
move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novonome);



$query = mysqli_query($conecta, "UPDATE usuario  set first_name = '$first_name',  last_name = '$last_name',  email = '$email',  password = '$password_antiga'  , foto='$novonome', updated_at = NOW() where id = '$id'  ");
if (mysqli_affected_rows($conecta) != 0) {
    echo "editado com sucesso";

    header("Location: ../index.php");
} else {
    // echo "erro ao editar";
    // header("Location: ../perfil.php");

}

    }
}