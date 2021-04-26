<?php

$connexao = connexao();

$userid =  $_SESSION['UserId'];
$result = mysqli_query($conecta, "SELECT * FROM usuario where id = $userid   ");
$resultado = mysqli_fetch_assoc($result);

?>
<!-- start: SLIDING BAR (SB) -->
<div id="slidingbar-area">
	<div id="slidingbar">
		<div class="row">



			<!-- end: SLIDING BAR THIRD COLUMN -->
		</div>
		<div class="row">
			<!-- start: SLIDING BAR TOGGLE BUTTON -->
			<div class="col-md-12 text-center">
				<a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
			</div>
			<!-- end: SLIDING BAR TOGGLE BUTTON -->
		</div>
	</div>
</div>
<!-- end: SLIDING BAR -->
<div class="main-wrapper">
	<!-- start: TOPBAR -->
	<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
		<!-- start: TOPBAR CONTAINER -->
		<div class="container">
			<div class="navbar-header">
				<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
					<i class="fa fa-bars"></i>
				</a>
				<!-- start: LOGO -->
				<!-- <a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Rapido">
				</a> -->
				<!-- end: LOGO -->
			</div>
			<div class="topbar-tools">
				<?php
				$sqlread = "SELECT *from usuario where id =$userid " ;
				try {
					$read = $connexao->prepare($sqlread);
					$read->execute();
				} catch (PDOException $e) {
					echo $e->getMessage();
				}

				while ($rs = $read->fetch(PDO::FETCH_OBJ)) {
				?>
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
						

							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img style="height:100%; width:30px; " src="assets/foto/<?php echo utf8_encode($rs->foto); ?>" class="img-circle" alt=""> <span class="username hidden-xs">
									<?php echo " " .$resultado['first_name']; ?></span> <i class="fa fa-caret-down "></i>
							</a>
							<ul class="dropdown-menu dropdown-dark">
								<li>
									<a href="perfil.php">
										Meu Perfil
									</a>
								</li>


								<li>
									<a href="login_lock_screen.php ">
										Bloquear Ecrã
									</a>
								</li>
								<li>
									<a href="Validacao/logout.php">
										Terminar Sessão
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
						<!--  -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				<?php } ?>
			</div>
		</div>
		<!-- end: TOPBAR CONTAINER -->
	</header>
	<!-- end: TOPBAR -->
	<!-- start: PAGESLIDE LEFT -->
	<a class="closedbar inner hidden-sm hidden-xs" href="#">
	</a>
	<nav id="pageslide-left" class="pageslide inner">
		<div class="navbar-content">
			<!-- start: SIDEBAR -->
			<div class="main-navigation left-wrapper transition-left">
				<?php
				$sqlread = "SELECT *from usuario where id = $userid";
				try {
					$read = $connexao->prepare($sqlread);
					$read->execute();
				} catch (PDOException $e) {
					echo $e->getMessage();
				}

				while ($rs = $read->fetch(PDO::FETCH_OBJ)) {
				?>
					<div class="navigation-toggler hidden-sm hidden-xs">
						<a href="#main-navbar" class="sb-toggle-left">
						</a>
					</div>
					<div class="user-profile border-top padding-horizontal-10 block">
						<div class="inline-block">
							<img style="width: 90px; height: 100px;" src="assets/foto/<?php echo utf8_encode($rs->foto); ?>">
						</div>
						<div class="inline-block">
							<h5 class="no-margin"> Bem Vindo </h5>
							<h4 class="no-margin"><?php echo " " .$resultado['first_name'] . " " . $resultado['last_name'];
													?> </h4>


						</div>
					</div>
				<?php } ?>
				<!-- start: MAIN NAVIGATION MENU -->
				<ul class="main-navigation-menu">
					<li class="active open">
						<a href="index.php"><i class="fa fa-home"></i> <span class="title"> Home </span><span class="label label-default pull-right "></span> </a>
					</li>
					<li>
						<a href="javascript:void(0)"><i class="fa fa-file-text"></i> <span class="title"> Documentos </span><i class="icon-arrow"></i> </a>
						<ul class="sub-menu">

							<li>
								<a href="documentos.php">
									<span class="title"> Enviar Documentos </span>
								</a>
							</li>
							<?php if ($_SESSION['UserNivel'] == "Administrador") { ?>
								<li>
									<a href="listar_documentos.php">
										<span class="title">Todos Documentos </span>
									</a>
								</li>
							<?php } ?>
							<li>
								<a href="documentos_recebidos.php">
									<span class="title"> Documentos Recebidos </span>
								</a>
							</li>
							<li>
								<a href="documentos_enviados.php">
									<span class="title"> Documentos Enviados </span>
								</a>
							</li>
						</ul>
					</li>
					<?php if ($_SESSION['UserNivel'] == "Administrador") { ?>
					<li>
						<a href="javascript:void(0)"><i class="fa fa-users"></i> <span class="title"> Funcionários </span><i class="icon-arrow"></i> </a>
						<ul class="sub-menu">
							
								<li>
									<a href="funcionarios.php">
										<span class="title"> Ver Todos </span>
									</a>
								</li>

							
								<li>
									<a href="cargo.php">
										<span class="title"> Função ou Cargo </span>
									</a>
								</li>

						</ul>
					</li>
					<?php } ?>
					<?php if ($_SESSION['UserNivel'] == "Administrador") { ?>

						<li>
							<a href="javascript:void(0)"><i class="fa fa-pencil-square-o"></i> <span class="title"> Departamentos </span><i class="icon-arrow"></i> </a>
							<ul class="sub-menu">
								<li>
									<a href="departamentos.php">
										<span class="title">Todos</span>
									</a>
								</li>


							</ul>
						</li>
					<?php } ?>

				</ul>
				<!-- end: MAIN NAVIGATION MENU -->
			</div>
			<!-- end: SIDEBAR -->
		</div>
		<div class="slide-tools">
			<div class="col-xs-6 text-left no-padding">
				<a class="btn btn-sm status" href="#">
					Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
				</a>
			</div>
			<div class="col-xs-6 text-right no-padding">
				<a class="btn btn-sm log-out text-right" href="Validacao/logout.php">
					<i class="fa fa-power-off"></i> Terminar Sessão
				</a>
			</div>
		</div>
	</nav>


	<!-- end: SUBVIEW SAMPLE CONTENTS -->
</div>