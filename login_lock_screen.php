<?php
session_start();
include("conexao.php");
$connexao = connexao();

$userid =  $_SESSION['UserId'];
$result = mysqli_query($conecta, "SELECT * FROM usuario where id = $userid   ");
$resultado = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/login_lock_screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:49:08 GMT -->

<head>
	<title>Tela Bloqueada | Sistema de Gestão Documental ZEE</title>
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
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/styles-responsive.css">
	<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
	<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
	<!-- end: MAIN CSS -->
	<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link href="assets/plugins/sweetalert/lib/sweet-alert.css" rel="stylesheet" />
	<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->

<body class="lock-screen">
	<div class="main-ls animated flipInX">
		<div class="logo">
			<!-- <img src="assets/images/logo.png"> -->
		</div>
		<div class="box-ls">
				<?php
                   $sqlread = "SELECT *from usuario where id = $userid "  ;
                    try {
                        $read = $connexao->prepare($sqlread);
                        $read->execute();
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }

					while ($rs = $read->fetch(PDO::FETCH_OBJ)) {
                    ?>
			<img style="height:130px; width:130px; "  src="assets/foto/<?php echo ($rs->foto); ?>" />
			<div class="user-info">
				<h3><i class="fa fa-lock"></i> <?php echo " " . $resultado['first_name'] . " " . $resultado['last_name']; ?></h3>
				<span><?php echo " " . $_SESSION['UserEmail']; ?></span>
				<span><em>Por Favor Introduza sua senha para desbloquear!</em></span>

				<?php
					if (isset($_SESSION['login_lock_screen_error'])) {
						echo $_SESSION['login_lock_screen_error'];
						unset($_SESSION['login_lock_screen_error']);
						
					}
                    ?>
				<form action="Validacao/verify_password.php" method="POST">
					
					<div class="input-group">
						<input type="password" name="password" placeholder="Password" class="form-control" required>
						<span class="input-group-btn">
							<button class="btn btn-green" type="submit">
								<i class="fa fa-chevron-right"></i>
							</button>
						
						 </span>
						
					</div>


					<!-- <div class="relogin">
						<a href="login_login.html">
							Não é <?php echo " " .$resultado['first_name'] . " " . $resultado['last_name']; ?>?</a>
					</div> -->
				</form>
			</div>
			<?php }?>
		</div>
		<div class="copyright">
			<?php include("footer.php") ?>
		</div>
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
	<!--[if gte IE 9]><!-->
	<script src="../../../ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<!--<![endif]-->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="assets/js/ui-notifications.js"></script>
    <script src="assets/plugins/sweetalert/lib/sweet-alert.min.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- <script>
		jQuery(document).ready(function() {
			Main.init();
		});
	</script> -->
	 <script>
        jQuery(document).ready(function () {
            Main.init();
            SVExamples.init();
            UINotifications.init();
        });
    </script>
</body>
<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/login_lock_screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:49:10 GMT -->

</html>