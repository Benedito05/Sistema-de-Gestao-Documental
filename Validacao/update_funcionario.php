<?php
session_start();
include_once("../conexao.php");









$id = $_POST["id"];
$first_name = filter_var($_POST['first_name']);
$last_name = $_POST['last_name'];
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$nivel_acesso = $_POST['Nivel_Acesso'];

$query = mysqli_query($conecta, "UPDATE usuario  set first_name = '$first_name',  last_name = '$last_name',  email = '$email',  Nivel_Acesso ='$nivel_acesso'  , updated_at = NOW() where id = '$id'  ");

if (mysqli_affected_rows($conecta) != 0) {
    echo "editado com sucesso";

    header("Location: ../funcionarios.php");
} else {
    echo "erro ao editar";
    header("Location: ../funcionarios.php");

}

