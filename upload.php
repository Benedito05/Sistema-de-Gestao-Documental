<?php
session_start();
include("conexao.php");








for ($a = 0; $a < count($_POST['id_usuario_recebido']); $a++) {

  $resultado1 = mysqli_query($conecta, "SELECT * FROM usuario WHERE id = " . $_POST['id_usuario_recebido'][$a] . "");
  $usuario_upload = mysqli_fetch_array($resultado1);


  if (isset($_FILES['arquivo'])) {


    $id_usuario = isset($_POST['id_usuario_recebido'][$a]) ? $_POST['id_usuario_recebido'][$a] : null;
    $id_usuario_enviado = $_SESSION['UserId'];
    $title = $_POST["title"];

    $status = $_POST["status"];
    $formatos_permitidos = array(".pdf");
    $extensao = strtolower(strchr($_FILES['arquivo']['name'], '.'));
    if (in_array($extensao, $formatos_permitidos)) {

      $novonome = uniqid() . $extensao;

      $diretorio = "uploads/";
      move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novonome);

      $sql = mysqli_query($conecta, "INSERT INTO upload (document_upload, title, status, id_usuario_recebido,  id_usuario_enviado,	date_send) values ('$novonome', '$title', '$status', '$id_usuario', '$id_usuario_enviado', NOW())");

      echo $_SESSION['mensagem'] = '<div class="alert alert-success" style="text-align: center">
  
      <strong style="text-align: center"> Documento Enviado com Sucesso!! </strong> 
    </div>';
      header("Location: documentos.php");
     
    } else {
      // $mensagem  = "Erro ao Enviar Documento";

      echo $_SESSION['mensagem'] = '<div class="alert alert-danger" style="text-align: center">
  
      <strong style="text-align: center">Formato Não Permitido! </strong> 
    </div>';
      header("Location: documentos.php");
    }
 }else{

    // $mensagem  = "Formato Não Permitido";
    echo $_SESSION['mensagem'] = '<div class="alert alert-danger" style="text-align: center">
  
    <strong style="text-align: center"> Erro ao Enviar Documento </strong> 
  </div>';
    header("Location: documentos.php");
   }
}
