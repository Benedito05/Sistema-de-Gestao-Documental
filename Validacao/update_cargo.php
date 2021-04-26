<?php
session_start();
include_once("../conexao.php");









$id = $_POST["id"];
$name = filter_var($_POST['name']);


$query = mysqli_query($conecta, "UPDATE funcao  set name = '$name',   updated_at = NOW() where id = '$id'  ");
// var_dump($id, $name);
// die();
if (mysqli_affected_rows($conecta) != 0) {
    $_SESSION['update_cargo'] = '<div class="alert alert-success" style="text-align: center">
    
    <strong style="text-align: center">Cargo ou Função Editado  com  Sucesso!</strong> 
 </div>';
    // header("Location: ../documentos_enviados.php");
    echo "<script>location.replace('../cargo.php')</script>";
} else {
    $_SESSION['update_cargo'] = '<div class="alert alert-warning" style="text-align: center">
    
    <strong style="text-align: center">Erro ao editar Cargo!</strong> 
 </div>';
    header("Location: ../cargo.php");

}

