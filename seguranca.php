<?php

ob_start();
if (($_SESSION['UserId'] == "") || ($_SESSION['UserEmail'] == "") || ($_SESSION['UserPassword'] == "")) {
    unset($_SESSION['UserId'], 
            $_SESSION['UserFirstName'], 
            $_SESSION['UserLastName'], 
            $_SESSION['UserPassword'],
            $_SeSSION['UserEmail'],
            $_SESSION['UserNivel_Acesso']);
    //Mensagem de Erro
   echo "		<script type=\"text/javascript\">
					alert(\"Erro Acesso Indisponivel !\");
                                      
				</script>
			";

    //Manda o usuário para a tela de login
    header("Location: login.php");
}
