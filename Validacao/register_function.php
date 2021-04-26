
<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");
$funcao = $_POST["name"];

$query = mysqli_query($conecta, "INSERT INTO funcao (name) VALUES ('$funcao')");

?>


        <?php
        if (mysqli_affected_rows($conecta) != 0) {

            
 
        //  echo "    <script type=\"text/javascript\">
		// 			alert(\"$first_name,  cadastrado com Sucesso\");
		// 		</script>
		// 	";
            $_SESSION['cad_department']='<div class="alert alert-success" style="text-align: center">
    
            <strong style="text-align: center">    funcao  Cadastrada com êxito! </strong> 
         </div>'
         ;
            header("Location: ../index.php");
        } else {
            $_SESSION['cad_department']='<div class="alert alert-danger" style="text-align: center">
    
            <strong style="text-align: center">Erro ao cadastrar Departamento!</strong> 
         </div>'
         ;
       
         header("Location: ../index");
        }
       
    echo  "<p>$first_name, voce </p>";
        ?> 
 