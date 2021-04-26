<?php
session_start();
include_once("../conexao.php");









$id = $_POST["id"];
$name = filter_var($_POST['name']);


$query = mysqli_query($conecta, "UPDATE departamento  set name = '$name'  , updated_at = NOW() where id = '$id'  ");

if (mysqli_affected_rows($conecta) != 0) {
    echo "editado com sucesso";

    header("Location: ../departamentos.php");
} else {
    echo "erro ao editar";
    header("Location: ../departamentos.php");

}

