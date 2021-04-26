<?php
session_start();
include("conexao.php");

?>

<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/table_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:51:06 GMT -->

<head>
    <title>Cargos ou Função | Sistema de Gestão Documental ZEE</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
    <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CORE CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/styles-responsive.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
    <link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print" />
    <!-- end: CORE CSS -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->

<body>


    <div class="main-wrapper">
        <?php include("menu.php") ?>
        <div class="main-container inner">
            <!-- start: PAGE -->
            <div class="main-content">

                <div class="container">
                    <!-- start: PAGE HEADER -->
                    <!-- start: TOOLBAR -->
                    <div class="toolbar row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="page-header">
                                <h1>Sistema de Gestão Documental</h1>
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
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#.php">
                                        Zona Ecónomica Especial
                                    </a>
                                </li>
                                <li class="active">
                                    ZEE
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- end: BREADCRUMB -->
                    <!-- start: PAGE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- start: DYNAMIC TABLE PANEL -->
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Cargo ou Função <span class="text-bold">ZEE</span></h4>
                                    <div class="panel-tools">
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                                <li>
                                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Esconder</span> </a>
                                                </li>
                                                <li>
                                                    <a class="panel-refresh" href="#">
                                                        <i class="fa fa-refresh"></i> <span>Actualizar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="panel-config" href="#panel-config" data-toggle="modal">
                                                        <i class="fa fa-wrench"></i> <span>Configurações</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="panel-expand" href="#">
                                                        <i class="fa fa-expand"></i> <span>Tela Cheia</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <?php
                        if (isset($_SESSION['apagar_cargo'])) {
                            echo $_SESSION['apagar_cargo'];
                            unset($_SESSION['apagar_cargo']);
                            echo "<script>
                            setTimeout(() => {
                                
                                window.location.replace('cargo.php');
                                
                            }, 2100);
                        </script>";
                        }

                        if (isset($_SESSION['update_cargo'])) {
                            echo $_SESSION['update_cargo'];
                            unset($_SESSION['update_cargo']);
                            echo "<script>
                            setTimeout(() => {
                                
                                window.location.replace('cargo.php');
                                
                            }, 2100);
                        </script>";
                        }

                        ?>
                                    <?php
                                    $resultado = mysqli_query($conecta, "select * from funcao order by 'id'");
                                    $linhas = mysqli_num_rows($resultado);
                                    ?>
                                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Função ou Cargo</th>
                                                <th>Acções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $a = 1;
                                            while ($linhas = mysqli_fetch_array($resultado)) {
                                                echo "<tr>";
                                                echo "<td class=''>" . $a . "</td>";
                                                echo "<td class=''>" . $linhas['name'] . "</td>";

                                            ?>
                                                <td class="day past agileits w3layouts calendar-day-2015-11-01">

                                                    <?php if (!isset($_SESSION['AdminId'])) { ?>


                                                        <button type="button" title="editar função ou Cargo" class="btn btn-warning view_dataa" id="<?php echo $linhas['id']; ?>"><i class="fa fa-edit"></i></button>


                                                    <?php } ?>
                                                    <?php if (!isset($_SESSION['AdminId'])) { ?>
                                                        <button type="button" title="eliminar função ou cargo" class="btn btn-danger view_datass" id="<?php echo $linhas['id']; ?>"><i class="fa fa-trash"></i></button>
                                                    <?php } ?>
                                                <?php
                                                echo "</tr>";
                                                $a++;
                                            }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">



                                        <form method="POST" action="Validacao/update_cargo.php">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar Função ou Cargo</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <span id="visul_cargo"></span>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Editar</button>
                                                </div>
                                            </div>

                                        </form>
                                        <div>


                                        </div>


                                        <div class="modal fade" id="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">



                                                <form method="POST" action="Validacao/delete_cargo.php">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Função ou Cargo

                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Tem certeza que deseja eliminar Função ou Cargo?</p>
                                                            <p> <span id="dele_cargo"></span></p>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-success">Eliminar</button>
                                                        </div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>

                                    </div>
                                    <!-- end: DYNAMIC TABLE PANEL -->
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
                <footer class="inner">
                    <div class="footer-inner">
                        <div class="pull-left">
                            <?php include("footer.php") ?>

                        </div>

                    </div>
                </footer>




                <?php include('painel.php') ?>



            </div>

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
            <!-- Editar -->
            <script>
                $(document).ready(function() {
                    $(document).on('click', '.view_dataa', function() {
                        var cargo_id = $(this).attr("id");

                        // alert(user_id);
                        //Verificar se há valor na variável "user_id".
                        if (cargo_id !== '') {
                            var dados = {
                                cargo_id: cargo_id
                            };
                            $.post('editar_cargo.php', dados, function(retorna) {
                                //Carregar o conteúdo para o usuário
                                $("#visul_cargo").html(retorna);
                                $('#exampleModal').modal('show');
                            });
                        }
                    });
                });
            </script>

            <!-- eliminar -->
            <script>
                $(document).ready(function() {
                    $(document).on('click', '.view_datass', function() {
                        var user_id = $(this).attr("id");

                        // alert(user_id);
                        //Verificar se há valor na variável "user_id".
                        if (user_id !== '') {
                            var dados = {
                                user_id: user_id
                            };

                            $.post('deletar_cargo.php', dados, function(retorna) {
                                //Carregar o conteúdo para o usuário
                                $("#dele_cargo").html(retorna);
                                $('#static').modal('show');
                            });


                        }
                    });
                });
            </script>
</body>

</html>