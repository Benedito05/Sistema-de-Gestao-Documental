<?php
session_start();
require_once("seguranca.php");
include("conexao.php");


$userid =  $_SESSION['UserId'];
$result = mysqli_query($conecta, "SELECT * FROM usuario where id = $userid   ");
$resultado = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<!--<![endif]-->
<!-- start: HEAD -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/pages_user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:49:04 GMT -->

<head>
	<title>Meu Perfil | Sistema de Gestão Documental ZEE</title>
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
		<a class="closedbar inner hidden-sm hidden-xs" href="#">
		</a>

		<div class="main-container inner">
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Fechar
								</button>
								<button type="button" class="btn btn-primary">
									Salvar
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<!-- start: TOOLBAR -->
					<div class="toolbar row">
						<div class="col-sm-6 hidden-xs">
							<div class="page-header">
								<h1>Sistema de Gestão Documental </h1>
							</div>
						</div>
	
					</div>
					<!-- end: TOOLBAR -->
					<!-- end: PAGE HEADER -->
					<!-- start: BREADCRUMB -->
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li>
									<a href="#">
										Dashboard
									</a>
								</li>
								<li class="active">
									Perfil de Usuário
								</li>
							</ol>
						</div>
					</div>
					<!-- end: BREADCRUMB -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_overview">
											Visão global
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Editar Perfil
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_projects">
											Documentos
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="panel_overview" class="tab-pane fade in active">
										<div class="row">
											<div class="col-sm-5 col-md-4">
												<div class="user-left">
													<div class="center">
														<?php
														if (isset($_SESSION['edit_erro'])) {
															echo $_SESSION['edit_erro'];
															unset($_SESSION['edit_erro']);
														}
														?>
														<?php
														$sqlread = "SELECT *from usuario where id = "  . $_SESSION['UserId'];
														try {
															$read = $connexao->prepare($sqlread);
															$read->execute();
														} catch (PDOException $e) {
															echo $e->getMessage();
														}

														while ($rs = $read->fetch(PDO::FETCH_OBJ)) {
														?>
															<h4><?php echo " " . $resultado['first_name'] . " " . $resultado['last_name']; ?></h4>

															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="user-image">
																	<div class="fileupload-new thumbnail"><img src="assets/foto/<?php echo utf8_encode($rs->foto); ?> ">
																	<?php } ?>
																	</div>
																	<div class="fileupload-preview fileupload-exists thumbnail"></div>
																	<div class="user-image-buttons">
																		<span class="btn btn-azure btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
																			<input type="file">
																		</span>
																		<a href="#" class="btn fileupload-exists btn-red btn-sm" data-dismiss="fileupload">
																			<i class="fa fa-times"></i>
																		</a>
																	</div>
																</div>
															</div>
															<hr>
															<!-- <div class="social-icons block">
															<ul>
																<li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
																	<a href="http://www.twitter.com/" target="_blank">
																		Twitter
																	</a>
																</li>
																<li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
																	<a href="http://facebook.com/" target="_blank">
																		Facebook
																	</a>
																</li>
																<li data-placement="top" data-original-title="Google" class="social-google tooltips">
																	<a href="http://google.com/" target="_blank">
																		Google+
																	</a>
																</li>
																<li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
																	<a href="http://linkedin.com/" target="_blank">
																		LinkedIn
																	</a>
																</li>
																<li data-placement="top" data-original-title="Github" class="social-github tooltips">
																	<a href="#" target="_blank">
																		Github
																	</a>
																</li>
															</ul>
														</div> -->
															<hr>
													</div>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Dados Pessoais</th>
															</tr>
														</thead>
														<tbody>

															<tr>
															<tr>
																<td>Nome:</td>
																<td>
																	<a href="#">
																		<?php echo " " . $_SESSION['UserFirstName'] . ' ' . $_SESSION['UserLastName']; ?>
																	</a>
																</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info" title="Editar"></i></a></td>
															</tr>
															<td>Email:</td>
															<td>
																<a href="#">
																	<?php echo " " . $_SESSION['UserEmail']; ?>
																</a>
															</td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info" title="Editar"></i></a></td>
															</tr>


														</tbody>
													</table>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Informações Gerais</th>
															</tr>
														</thead>
														<tbody>




															<tr>
																<td>Nivel</td>
																<td><span class="label label-sm label-info"><?php echo "" .  $_SESSION['UserNivel'] ?></span></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info" title="Editar"></i></a></td>
															</tr>
														</tbody>
													</table>

													<!--  -->
												</div>
											</div>

										</div>
									</div>
									<div id="panel_edit_account" class="tab-pane fade">
										<form enctype="multipart/form-data" action="Validacao/edit_user.php" role="form" id="form" method="POST">

											<div class="row">
												<div class="col-md-12">

													<h3>Informações do Perfil</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Nome
														</label>
														<input type="text" value="<?php echo "" . $resultado['first_name']; ?>" class="form-control" id="firstname" name="first_name">
													</div>
													<div class="form-group">
														<label class="control-label">
															Sobrenome
														</label>
														<input type="text" value="<?php echo "" . $resultado['last_name']; ?>" class="form-control" id="lastname" name="last_name">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email
														</label>
														<input type="email" value="<?php echo "" . $resultado['email']; ?>" class="form-control" id="email" name="email">
													</div>

													<div class="form-group">
														<label class="control-label">
															Password
														</label>
														<input type="password" class="form-control" palceholder="insira sua senha" name="password_actual" required>
													</div>
													<div class="form-group">
														<label class="control-label">
															Nova Password </label>
														<input type="password" placeholder="Nova password" class="form-control" id="password" name="password_nova">
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirmar Nova Password </label>
														<input type="password" placeholder="Confirme password" class="form-control" id="password_again" name="confir_password">
													</div>
													<input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
												</div>
												<div class="col-md-6">



													<div class="form-group">
														<label>
															Alterar Foto de Perfil
														</label>
														<?php
														$sqlread = "SELECT *from usuario where id = "  . $_SESSION['UserId'];
														try {
															$read = $connexao->prepare($sqlread);
															$read->execute();
														} catch (PDOException $e) {
															echo $e->getMessage();
														}

														while ($rs = $read->fetch(PDO::FETCH_OBJ)) {
														?>


															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="fileupload-new thumbnail"><img src="assets/foto/<?php echo utf8_encode($rs->foto); ?>" alt="">
																</div>
															<?php } ?>
															<div class="fileupload-preview fileupload-exists thumbnail"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-azure btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Selecionar Imagem</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Alterar</span>
																	<input type="file" name="arquivo">
																</span>
																<a href="#" class="btn fileupload-exists btn-red" data-dismiss="fileupload">
																	<i class="fa fa-times"></i> Remover
																</a>
															</div>
															</div>
													</div>
												</div>
											</div>


											<div class="row">

												<div class="col-md-4">
													<button class="btn btn-green btn-block" type="submit" name="actualizar">
														Actualizar <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
									<div id="panel_projects" class="tab-pane fade">



										<div class="panel-body">
											<?php
											$resultado = mysqli_query($conecta, "select up.id, up.document_upload, up.title, up.status, up.id_usuario_recebido, up.id_usuario_enviado, up.date_send, fu.first_name, fu.last_name,fu.id from upload as up inner join usuario as fu on up.id_usuario_enviado = fu.id where up.id_usuario_recebido=" . $_SESSION['UserId']);
											$linhas = mysqli_num_rows($resultado);
											?>

											<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
												<thead>
													<tr>
														<th>#</th>
														<th>Documento</th>
														<th>Título do Documento</th>
														<th>Enviado Por</th>
														<th>Data de Envio</th>
														<th>Acções</th>
													</tr>
												</thead>
												<tbody>

													<?php
													$a = 1;
													while ($linhas = mysqli_fetch_array($resultado)) {
														echo "<tr>";
														echo "<td class=''>" . $a . "</td>";
														echo "<td class='fa fa-file-pdf-o fa-2x text-danger '></td>";

														echo "<td class=''>" . $linhas['title'] . "</td>";
														echo "<td class=''>" . $linhas['first_name'] . ' ' . $linhas['last_name'] . "</td>";
														echo "<td class=''>" . $linhas['date_send'] . "</td>";

													?>
														<td class="day past agileits w3layouts calendar-day-2015-11-01">

															<?php if (!isset($_SESSION['AdminId'])) { ?>

																<a href="uploads/<?php echo $linhas['document_upload']; ?>" target="_blank" <?php echo $linhas['title']; ?>><button type='button' class='btn btn-sm btn-info' title="Ver Documento"><i class="fa fa-eye"></i></button> </a>
															<?php } ?>
															<?php if (!isset($_SESSION['AdminId'])) { ?>
																<a href='processa/proc_apagar_usuario.php?id_usuario=<?php echo $linhas['id_usuario']; ?>'><button type='button' title="Apagar Funcionário" class='btn  btn-danger'><i class="fa fa-trash"></i></button></a>
															<?php } ?>
														<?php
														echo "</tr>";
														$a++;
													}
														?>
												</tbody>
											</table>
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
		<!-- end: FOOTER -->
		<!-- start: SUBVIEW SAMPLE CONTENTS -->
		<!-- *** NEW NOTE *** -->
		<div id="newNote">
			<div class="noteWrap col-md-8 col-md-offset-2">
				<h3>Adicionar Nova Nota</h3>
				<form class="form-note">
					<div class="form-group">
						<input class="note-title form-control" name="noteTitle" type="text" placeholder="Título da Nota...">
					</div>
					<div class="form-group">
						<textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
						<textarea class="summernote" placeholder="Escrever a Nota..."></textarea>
					</div>
					<div class="pull-right">
						<div class="btn-group">
							<a href="#" class="btn btn-info close-subview-button">
								Fechar
							</a>
						</div>
						<div class="btn-group">
							<button class="btn btn-info save-note" type="submit">
								Salvar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- *** READ NOTE *** -->
		<div id="readNote">
			<div class="barTopSubview">
				<a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Adicionar Nova Nota</a>
			</div>
			<div class="noteWrap col-md-8 col-md-offset-2">
				<div class="panel panel-note">
					<div class="e-slider owl-carousel owl-theme">
						<div class="item">
							<div class="panel-heading">
								<h3>Esta é a Nota</h3>
							</div>
							<div class="panel-body">
								<div class="note-short-content">
									Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
								</div>
								<div class="note-content">
									Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit
									in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
									<br> Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									<br> Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor
									sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
									<br> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
									<br> Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
									<br> At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique
									sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
									<br> Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam
									et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
									<br> Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
								</div>
								<div class="note-options pull-right">
									<a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="Eliminar-note"><i class="fa fa-times"></i>Eliminar</a>
								</div>
							</div>
							<div class="panel-footer">
								<div class="avatar-note"><img src="assets/images/avatar-2-small.jpg" alt="">
								</div>
								<span class="author-note">Nicole Bell</span>
								<time class="timestamp" title="2014-02-18T00:00:00-05:00">
									2014-02-18T00:00:00-05:00
								</time>
							</div>
						</div>
						<div class="item">
							<div class="panel-heading">
								<h3>Segunda Nota</h3>
							</div>
							<div class="panel-body">
								<div class="note-short-content">
									Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
								</div>
								<div class="note-content">
									Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									<br> Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor
									sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
									<br> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
									<br> Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
									<br> Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam
									et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
									<br> Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
								</div>
								<div class="note-options pull-right">
									<a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="Eliminar-note"><i class="fa fa-times"></i> Eliminar</a>
								</div>
							</div>
							<div class="panel-footer">
								<div class="avatar-note"><img src="assets/images/avatar-3-small.jpg" alt="">
								</div>
								<span class="author-note">Steven Thompson</span>
								<time class="timestamp" title="2014-02-18T00:00:00-05:00">
									2014-02-18T00:00:00-05:00
								</time>
							</div>
						</div>
						<div class="item">
							<div class="panel-heading">
								<h3>This is yet another Note</h3>
							</div>
							<div class="panel-body">
								<div class="note-short-content">
									At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
								</div>
								<div class="note-content">
									At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt
									mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
									<br> Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									<br> Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor
									sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
									<br> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
								</div>
								<div class="note-options pull-right">
									<a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="Eliminar-note"><i class="fa fa-times"></i> Eliminar</a>
								</div>
							</div>
							<div class="panel-footer">
								<div class="avatar-note"><img src="assets/images/avatar-4-small.jpg" alt="">
								</div>
								<span class="author-note">Ella Patterson</span>
								<time class="timestamp" title="2014-02-18T00:00:00-05:00">
									2014-02-18T00:00:00-05:00
								</time>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- *** SHOW CALENDAR *** -->
		<div id="showCalendar" class="col-md-10 col-md-offset-1">
			<div class="barTopSubview">
				<a href="#newEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
			</div>
			<div id="calendar"></div>
		</div>
		<!-- *** NEW CONTRIBUTOR *** -->
		<div id="newContributor">
			<div class="noteWrap col-md-8 col-md-offset-2">
				<h3>Adicionar Novo Funcionário</h3>

				<form class="form-contributor" method="POST" action="Validacao/register_employee.php">
					<div class="row">
						<div class="col-md-12">
							<div class="errorHandler alert alert-danger no-display">
								<i class="fa fa-times-sign"></i> Existe algum erro. Por Favor verifique seus dados.
							</div>
							<div class="successHandler alert alert-success no-display">
								<i class="fa fa-ok"></i> Validação Concluida!
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="contributor-id hide" type="text">
								<label class="control-label">
									Primeiro Nome <span class="symbol required"></span>
								</label>
								<input type="text" placeholder="Seu Primeiro Nome" class="form-control contributor-firstname" name="first_name" maxlength="10">
							</div>
							<div class="form-group">
								<label class="control-label">
									Sobrenome <span class="symbol required"></span>
								</label>
								<input type="text" placeholder="Seu Sobrenome" class="form-control contributor-lastname" name="last_name" maxlength="15">
							</div>
							<div class="form-group">
								<label class="control-label">
									Email <span class="symbol required"></span>
								</label>
								<input type="email" placeholder="Exemplo@zee.co.ao" class="form-control contributor-email" name="email">
							</div>
							<div class="form-group">
								<select class="form-control" name="level" id="">Level
									<option>Nivel</option>
									<option>PCA</option>
									<option>Administrador Executivo </option>
									<option>Administrador N /Executivo </option>
									<option>Director de Departamento</option>
									<option>Chefe de Àrea</option>
								</select>

							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">
									Genéro <span class="symbol required"></span>
								</label>
								<div>
									<label class="radio-inline">
										<input type="radio" class="grey contributor-gender" value="F" name="genre">
										Femenino
									</label>
									<label class="radio-inline">
										<input type="radio" class="grey contributor-gender" value="M" name="genre">
										Masculino
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">
									Permissões <span class="symbol required"></span>
								</label>
								<select name="permits" class="form-control contributor-permits">
									<option value="View and Edit">Ver e Editar</option>
									<option value="View Only">Apenas Ver</option>
								</select>
							</div>
							<div class="form-group">
								<div class="fileupload fileupload-new contributor-avatar" data-provides="fileupload">
									<div class="fileupload-new thumbnail"><img src="assets/images/anonymous.jpg" alt="" width="50" height="50" />
									</div>
									<div class="fileupload-preview fileupload-exists thumbnail"></div>
									<div class="contributor-avatar-options">
										<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Selecionar imagem</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Mudar</span>
											<input type="file">
										</span>
										<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
											<i class="fa fa-times"></i> Remover
										</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">
									Enviar Mensagem (Opcional)
								</label>
								<textarea class="form-control contributor-message"></textarea>
							</div>
						</div>
					</div>
					<div class="pull-right">
						<div class="btn-group">
							<a href="#" class="btn btn-info close-subview-button">
								Fechar
							</a>
						</div>
						<div class="btn-group">
							<button class="btn btn-info save-contributor" type="submit">
								Salvar
							</button>
						</div>
					</div>
				</form>
				<div id="newdepartment">
					<div class="noteWrap col-md-8 col-md-offset-2">
						<h3>Adicionar Novo Departamento</h3>

						<form class="" method="POST" action="Validacao/register_department.php">
							<div class="row">
								<div class="col-md-12">
									<div class="errorHandler alert alert-danger no-display">
										<i class="fa fa-times-sign"></i> Existe algum erro. Por Favor verifique seus dados.
									</div>
									<div class="successHandler alert alert-success no-display">
										<i class="fa fa-ok"></i> Validação Concluida!
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="contributor-id hide" type="text">
										<label class="control-label">
											Departamento : <span class="symbol required"></span>
										</label>
										<input type="text" placeholder="gabinete ou departamento" class="form-control contributor-firstname" name=" department" maxlength="30" required>
									</div>



								</div>

							</div>
							<div class="pull-right">
								<div class="btn-group">
									<a href="#" class="btn btn-info close-subview-button">
										Fechar
									</a>
								</div>
								<div class="btn-group">
									<button class="btn btn-info save-contributor" type="submit">
										Salvar
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
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
	<script src="assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
	<script src="assets/js/pages-user-profile.js"></script>
	<script type="text/javascript" src="assets/js/table-data.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CORE JAVASCRIPTS  -->
	<script src="assets/js/main.js"></script>
	<!-- end: CORE JAVASCRIPTS  -->
	<script>
		jQuery(document).ready(function() {
			Main.init();
			SVExamples.init();
			TableData.init();
		});
	</script>
	<!-- <script>
		jQuery(document).ready(function() {
			Main.init();
			SVExamples.init();
			PagesUserProfile.init();
		});
	</script> -->
</body>
<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/pages_user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:49:06 GMT -->

</html>