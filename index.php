<?php
session_start();
require_once("seguranca.php");
include_once("conexao.php");

?>


<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<!--<![endif]-->
<!-- start: HEAD -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:45:38 GMT -->

<head>
    <title>Home | Sistema de Gestão Documental ZEE</title>
    <!-- start: META -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
    <link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
    <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CORE CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/styles-responsive.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
    <link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print">
    <!-- end: CORE CSS -->
    <link rel="shortcut icon" href="favicon.ico">
</head>
<!-- end: HEAD -->
<!-- start: BODY -->

<body>
    <!-- start: SLIDING BAR (SB) -->

    <!-- end: SLIDING BAR -->
    <div class="main-wrapper">
        <!-- start: TOPBAR -->
        <?php include("menu.php") ?>

        <!-- end: PAGESLIDE RIGHT -->
        <!-- start: MAIN CONTAINER -->
        <div class="main-container inner">
            <!-- start: PAGE -->
            <div class="main-content">

                <!-- /.modal -->
                <!-- end: SPANEL CONFIGURATION MODAL FORM -->
                <div class="container">
                    <!-- start: PAGE HEADER -->
                    <!-- start: TOOLBAR -->
                    <div class="toolbar row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="page-header">
                                <h1 style="text-align: center;">Sistema de Gestão Documental</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <a href="#" class="back-subviews">
                                <i class="fa fa-chevron-left"></i> Voltar
                            </a>
                            <a href="#" class="close-subviews">
                                <i class="fa fa-times"></i> Fechar
                            </a>
                            <div class="toolbar-tools pull-right">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right">
                                    <!-- start: TO-DO DROPDOWN -->
                                    <li class="dropdown">
                                        <?php if ($_SESSION['UserNivel'] == "Administrador") { ?>
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                                                <i class="fa fa-plus"></i> ADICIONAR

                                            </a>
                                        <?php } ?>
                                        <ul class="dropdown-menu dropdown-light dropdown-subview">
                                           
                                            <li class="dropdown-header">
                                                Funcionários
                                            </li>
                                            <li>
                                                <a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Adicionar Novo Funcionário</a>
                                            </li>
                                            <!-- <li>
                                                <a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span>Ver Funcionários</a>
                                            </li> -->
                                            <li class="dropdown-header">
                                                Departamentos
                                            </li>
                                            <li>
                                                <a href="#newNote" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Adicionar Novo Departamento</a>
                                            </li>
                                            <li class="dropdown-header">
                                                Função ou Cargo
                                            </li>
                                            <li>
                                                <a href="#newEvent" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Adicionar Nova Função ou Cargo</a>
                                            </li>

                                        </ul>
                                    </li>


                                </ul>
                                </li>

                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>
                        </div>
                    </div> <!-- end: TOOLBAR -->
                    <!-- end: PAGE HEADER -->
                    <!-- start: BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">
                                        Sistema de Gestão Documental
                                    </a>
                                </li>
                                <li class="active">
                                    Zona Ecónomica Especial
                                </li>
                            </ol>
                        </div>
                        <?php
                        if (isset($_SESSION['login_lock_screen_success'])) {
                            echo $_SESSION['login_lock_screen_success'];
                            unset($_SESSION['login_lock_screen_success']);
                            echo "<script>
                            setTimeout(() => {
                                
                                window.location.replace('index.php');
                                
                            }, 2100);
                        </script>";
                        }


                        ?>

                    </div>
                    <!-- end: BREADCRUMB -->
                    <!-- start: PAGE CONTENT -->





                    <!-- start: PAGE CONTENT -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3 col-sm-6">
                            <div class="panel panel-default panel-white core-box">
                                <div class="panel-tools">
                                    <?php
                                    $resultado1 = mysqli_query($conecta, "select * from usuario order by 'id'");
                                    $linhas1 = mysqli_num_rows($resultado1);
                                    ?>


                                </div>
                                <div class="panel-body no-padding">
                                    <div class="partition-green padding-20 text-center core-icon">
                                        <i class="fa fa-user fa-2x icon-big"><span style="margin-left: 5px;"><?= $linhas1 ?></span></i>
                                    </div>
                                    <div class="padding-20 core-content">
                                        <h3 class="title block no-margin">Funcionários</h3>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-6">
                            <div class="panel panel-default panel-white core-box">
                                <?php
                                $resultado2 = mysqli_query($conecta, "select * from departamento order by 'id'");
                                $linhas2 = mysqli_num_rows($resultado2);
                                ?>
                                <div class="panel-body no-padding">
                                    <div class="partition-blue padding-20 text-center core-icon">
                                        <i class="fa fa-home fa-2x icon-big"><span style="margin-left: 5px;"><?= $linhas2 ?></span></i>
                                    </div>
                                    <div class="padding-20 core-content">
                                        <h3 class="title block no-margin">Departamentos</h3>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-6">
                            <div class="panel panel-default panel-white core-box">
                            <?php
											$resultado = mysqli_query($conecta, "select up.id as id_documento, up.document_upload, up.title, up.status, up.id_usuario_recebido, up.id_usuario_enviado, up.date_send, fu.first_name, fu.last_name,fu.id from upload as up inner join usuario as fu on up.id_usuario_recebido = fu.id where up.id_usuario_enviado=" . $_SESSION['UserId']);
											$linhas3 = mysqli_num_rows($resultado);
											?>
                                <div class="panel-body no-padding">
                                    <div class="partition-red padding-20 text-center core-icon">
                                        <i class="fa fa-file-text fa-2x icon-big"><span style="margin-left: 5px;"><?= $linhas3 ?></span></i>
                                    </div>
                                    <div class="padding-20 core-content">
                                        <h3 class="title block no-margin">Documentos Enviados</h3>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-6">
                            <div class="panel panel-default panel-white core-box">
                            <?php
											$resultado = mysqli_query($conecta, "select up.id as id_documento, up.document_upload, up.title, up.status, up.id_usuario_recebido, up.id_usuario_enviado, up.date_send, fu.first_name, fu.last_name,fu.id from upload as up inner join usuario as fu on up.id_usuario_enviado = fu.id where up.id_usuario_recebido=" . $_SESSION['UserId']);
											$linhas4 = mysqli_num_rows($resultado);
											?>
                                <div class="panel-body no-padding">
                                    <div class="partition-azure padding-20 text-center core-icon">
                                        <i class="fa fa-lock fa-2x icon-big"><span style="margin-left: 5px;"><?= $linhas4?></span></i>
                                    </div>
                                    <div class="padding-20 core-content">
                                        <h3 class="title block no-margin"> Documentos Recebidos</h3>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>
            <div class="subviews">
                <div class="subviews-container"></div>
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    <footer class="inner">
        <div class="footer-inner">
            <div class="pull-left">
                <?php include("footer.php") ?>

            </div>

        </div>
    </footer>
    <!-- <?php include ('painel.php') ?> 
    </div>


    <!-- *** SHOW CONTRIBUTORS *** -->
    <div id="showContributors">
        <div class="barTopSubview">
            <a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Adicionar Novo</a>
        </div>
        <div class="noteWrap col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="contributors">
                        <div class="options-contributors hide">
                            <div class="btn-group">
                                <button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                    <li>
                                        <a href="#newContributor" class="show-subviews edit-contributor">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="Eliminar-contributor">
                                            <i class="fa fa-times"></i> Eliminar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    <!--<![endif]-->
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
    <script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
    <script src="assets/plugins/moment/min/moment.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
    <script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
    <script src="assets/plugins/bootbox/bootbox.min.js"></script>
    <script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
    <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="assets/plugins/velocity/jquery.velocity.min.js"></script>
    <script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
    <script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
    <script src="assets/plugins/toastr/toastr.js"></script>
    <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
    <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
    <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>

    <script src="assets/plugins/truncate/jquery.truncate.js"></script>
    <script src="assets/plugins/summernote/dist/summernote.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/subview.js"></script>
    <script src="assets/js/subview-examples.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/plugins/nvd3/lib/d3.v3.js"></script>
    <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
    <script src="assets/plugins/nvd3/src/models/historicalBar.js"></script>
    <script src="assets/plugins/nvd3/src/models/historicalBarChart.js"></script>
    <script src="assets/plugins/nvd3/src/models/stackedArea.js"></script>
    <script src="assets/plugins/nvd3/src/models/stackedAreaChart.js"></script>
    <script src="assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
    <script src="assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="assets/js/index.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CORE JAVASCRIPTS  -->
    <script src="assets/js/main.js"></script>
    <!-- end: CORE JAVASCRIPTS  -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
            SVExamples.init();
            Index.init();
        });
    </script>
</body>
<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:48:15 GMT -->

</html>