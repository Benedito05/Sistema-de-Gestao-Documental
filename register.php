<?php
session_start();
include_once("conexao.php");


?>

<head>
    <title>Registar | Sistema de Gestão Documental ZEE</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/styles-responsive.css">
    <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
    <!--[if IE 7]>
		
		<![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<!-- end: HEAD -->
<!-- start: BODY -->

<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo">
                <!-- <img src="assets/images/logo.png"> -->
            </div>
            <!-- start: LOGIN BOX -->
            <div class="box-login">
                <h3 style="text-align: center;">Sistema de Gestão Documental</h3>
                <br>
                <!-- <p>
                    Por Favor Introduza suas credenciais para Acessar Sua Conta.
                </p> -->
                <form class="form-login" action="Validacao/Validate_login.php" method="POST">


                    <?php
                    if (isset($_SESSION['register_suc'])) {
                        echo $_SESSION['register_suc'];
                        unset($_SESSION['register_suc']);
                        header("refresh:1, login.php");
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['register_erro'])) {
                        echo $_SESSION['register_erro'];
                        unset($_SESSION['register_erro']);
                    }
                    ?>

                    <fieldset>
                        <!-- <div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
                            </div> -->
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <i class="fa fa-envelope"></i> </span>
                        </div>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" class="form-control password" name="password" placeholder="Password" required>
                                <i class="fa fa-lock"></i>
                                <a class="forgot" href="#">
                                    Esqueceu sua Password?
                                </a> </span>
                        </div>
                        <div class="form-actions" style="margin-left: 120px;">
                            <!-- <label for="remember" class="checkbox-inline">
                                <input type="checkbox" class="grey remember" id="remember" name="remember">
                                Manter-me Conectado
                            </label> -->
                            <button type="submit" class="btn btn-green col-xs-6 ">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>



                        <div class="new-account">
                            Não Tem uma Conta?
                            <a href="#" class="register">
                                Criar Conta
                            </a>
                        </div>

                    </fieldset>
                </form>
                <!-- start: COPYRIGHT -->

                <!-- end: COPYRIGHT -->
            </div>
            <!-- end: LOGIN BOX -->
            <!-- start: FORGOT BOX -->
            <div class="box-forgot">
                <h3>Esqueceu Sua Senha?</h3>
                <p>
                    Introduza seu email para recuperar Senha.
                </p>
                <form class="form-forgot">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> Existe Algum erro.Por favor Verique seus Dados
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Seu Email">
                                <i class="fa fa-envelope"></i> </span>
                        </div>
                        <div class="form-actions">
                            <a class="btn btn-light-grey go-back">
                                <i class="fa fa-chevron-circle-left"></i> Log-In
                            </a>
                            <button type="submit" class="btn btn-green pull-right">
                                Recuperar <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
                <!-- start: COPYRIGHT -->
                <!-- <footer class="inner">
                    <div class="copyright">
                        
                            
                        

                    </div>
                </footer> -->
                <!-- end: COPYRIGHT -->
            </div>
            <!-- end: FORGOT BOX -->
            <!-- start: REGISTER BOX -->

            <div class="box-register">
                <h3>Regista-Se</h3>
                <!-- <p>
                    Preencha com seus dados :
                </p> -->

                <form class="" action="Validacao/register_employee.php" method="POST" enctype="multipart/form-data">


                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> Existe Algum erro.Por favor Verique seus Dados.
                     </div>
                     <fieldset>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="Primeiro Nome" maxlength="12" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Sobrenome" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label class="radio-inline">

                                Escolha sua Foto
                                <input type="file" class="form-control" name="img[]" required>
                            </label>
                        </div>

                        <div class="form-group">
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" class="grey" value="F" name="genre" required>
                                    Femenino
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" class="grey" value="M" name="genre" required>
                                    Masculino
                                </label>
                            </div>
                        </div>
                        <p>
                            Preencha os Detalhes da sua Conta:
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <i class="fa fa-envelope"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="password" class="form-control" name="password_again" placeholder=" Reconfirmar Password" required>
                                <i class="fa fa-lock"></i> </span>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="id_departamento" id="" required>
                                <option>Departamento</option>

                                <?php


                                $result_ies = "SELECT * FROM  departamento ORDER BY id";
                                $resultado_ies = mysqli_query($conecta, $result_ies);
                                while ($row_cat = mysqli_fetch_assoc($resultado_ies)) {
                                    echo '<option value="' . $row_cat['id'] . '">' . $row_cat['name'] . '</option>';
                                }

                                ?>

                            </select>


                        </div>
                        <div class="form-group">
                            <span class="input-icon">

                                <select class="form-control" name="id_funcao" required>
                                    <option>Função</option>
                                    <?php
                                    $busca = "SELECT * FROM  funcao ORDER BY id";
                                    $resultado = mysqli_query($conecta, $busca);
                                    while ($row_cat = mysqli_fetch_assoc($resultado)) {
                                        echo '<option value="' . $row_cat['id'] . '">' . $row_cat['name'] . '</option>';
                                    }
                                    ?>


                                </select>

                                <!-- <i class="fa fa-level-up"></i> -->
                            </span>

                        </div>


                        <div class="form-actions">
                            <div class="form-group">
                                <select class="form-control" name="Nivel_Acesso" id="" required>
                                    <option>Nivel de Acesso</option>
                                    <option>Administrador</option>
                                    <!-- <option>Usuário</option> -->

                                </select>

                            </div>
                            <button type="submit" class="btn btn-green pull-right">
                                Registar
                            </button>
                        </div>
                    </fieldset>

                </form>
                <!-- start: COPYRIGHT -->

                <!-- end: COPYRIGHT -->
            </div>
            <!-- end: REGISTER BOX -->
        </div>
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
    <!--[if gte IE 9]><!-->
    <script src=" assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    <!--<![endif]-->
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
    <script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
    <script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/js/login.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>
</body>