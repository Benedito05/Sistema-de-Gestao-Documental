<?php


class Help_Function
{

    public function verificarUsuarios()
    {
        include_once("conexao.php");
        $result = mysqli_query($conecta, "SELECT * FROM usuario");
        $resultado = mysqli_fetch_assoc($result);


        if (is_array($resultado) < 1) {
           
                return 'no_user';
           
            } else {

                return 'user';
            }
        }
    }

