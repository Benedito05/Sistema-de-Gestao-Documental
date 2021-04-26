
<?php
session_start();

//include_once("../seguranca.php");
include_once("../conexao.php");
$connexao = connexao();
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$genre = $_POST["genre"];
$email = $_POST["email"];
$password =md5($_POST["password"]);

$funcao = $_POST["id_funcao"];
$departament = $_POST["id_departamento"];
$Nivel_Acesso = $_POST["Nivel_Acesso"];


// $query = mysqli_query($conecta, "INSERT INTO usuario (first_name, last_name, genre, email, password, level, created_at) VALUES ('$first_name', '$last_name', '$genre', '$email', '$password', '$level', NOW())");



$file = $_FILES['img'];
$numFile = count(array_filter($file['name']));

//Pasta
$folder = '../assets/foto';

//Requisitos
$permite = array('image/jpeg', 'image/png');
$maxSize = 4000 * 4000 * 20;

//Mensagens
$msg = array();
$errorMsg = array(
    1=> 'O Arquivo no Upload é maior do que o limite definido em upload_max_filesize no php.ini.',
    2=> 'O Arquivo Ultrapassa o limite de tamanho em max_filesize que foi especificado no formulario HTML',
    3=> 'O Upload do arquivo foi feito parcialmente',
    4=> 'Não foi feito o upload do arquivo');

if($numFile<= 0){

    echo '<script>alert("Erro! Selecione a imagem.");</script>';
}
else if($numFile >= 2){

    echo '<script>alert("Erro!Voce ultrapassou o limite de upload. Selecione apenas uma e tente novamente");</script>';
}

else{

    for($i = 0; $i < $numFile; $i++){

        $name = $file['name'][$i];
        $type = $file['type'][$i];
        $size = $file['size'][$i];
        $error = $file['error'][$i];
        $tmp = $file['tmp_name'][$i];
        $extensao = @end(explode('.', $name));
        $novoNome = rand().".$extensao";

        if($error != 0)
        $msg[] = "<b>$name :</b>".$errorMsg[$error];

    else if(!in_array($type, $permite))
        $msg[] = "<script>alert('Erro!Imagen não suportada.');</script>";

    else if($size > $maxSize)
        $msg[] = "<script>alert('Erro! Taamanho da imagen muito grande.');</script>";

    else{

        if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){

           //$msg[] = "<b>$name : </b> Upload Realizado com Sucesso";
     
            $query = mysqli_query($conecta, "INSERT INTO usuario (first_name, last_name, genre, email, password, id_funcao, Nivel_Acesso, id_departamento, foto) VALUES ('$first_name', '$last_name', '$genre', '$email', '$password', '$funcao', '$Nivel_Acesso', '$departament', '$file'.$i)");

             $sql = 'INSERT INTO usuario (first_name, last_name, genre,email,password,id_funcao, Nivel_Acesso, id_departamento, foto)';
            $sql.= 'VALUES (:first_name, :last_name, :genre, :email, :password, :id_funcao, :Nivel_Acesso, :id_departamento, :foto)';
        
            try {
                $create = $connexao->prepare($sql);
                $create->bindValue(':first_name', $first_name, PDO::PARAM_STR);
                $create->bindValue(':last_name', $last_name, PDO::PARAM_STR);
                $create->bindValue(':genre', $genre, PDO::PARAM_STR);
                $create->bindValue(':email', $email, PDO::PARAM_STR);
                $create->bindValue(':password', $password, PDO::PARAM_STR);
                $create->bindValue(':id_funcao', $funcao, PDO::PARAM_STR);
                $create->bindValue(':Nivel_Acesso', $Nivel_Acesso, PDO::PARAM_STR);
                $create->bindValue(':id_departamento', $departament, PDO::PARAM_STR);
                $create->bindValue(':foto', $novoNome, PDO::PARAM_STR);

                
                
                if ($create->execute()) {
                     echo "<script>alert('orador cadastrado com sucesso!.');</script>";  
                }
                else{
                    echo "<script>alert('Ocorreu um erro ao cadastrar noticia imaterial! Tente dentro de alguns segundos.');</script>";
                }
            } catch (PDOException $e) {
                        echo $e->getMessage();
                     
            }

        }else

        $msg[] = "<b>$name : </b> Desculpe! Ocorreu um erro...";
    }
    foreach($msg as $pop)
        
    echo $pop. '<br>';

    }
}

?>



        <?php
        if (mysqli_affected_rows($conecta) != 0) {

            
 
        //  echo "    <script type=\"text/javascript\">
		// 			alert(\"$first_name,  cadastrado com Sucesso\");
		// 		</script>
		// 	";
            $_SESSION['cad_usuario']='<div class="alert alert-success" style="text-align: center">
    
            <strong style="text-align: center">    Funcionário  Cadastrado com êxito! </strong> 
         </div>'
         ;
            header("Location: ../index.php");
        } else {
            $_SESSION['cad_usuario']='<div class="alert alert-danger" style="text-align: center">
    
            <strong style="text-align: center">Erro ao cadastrar Funcionário!</strong> 
         </div>'
         ;
       
         header("Location: ../index");
        }
       
    echo  "<p>$first_name, voce </p>";
        ?> 
 