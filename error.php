
<head>
		<title><?= $title?></title>
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
		<link rel="stylesheet" href="<?= asset("plugins/bootstrap/css/bootstrap.min.css")?>">
		<link rel="stylesheet" href="<?= asset("css/styles.css")?>">
		<link rel="stylesheet" href="<?= asset("css/styles-responsive.css")?>">
		<link rel="stylesheet" href="<?= asset("plugins/font-awesome/css/font-awesome.min.css")?>">
		<link rel="stylesheet" href="<?= asset("plugins/animate.css/animate.min.css")?>">
		<link rel="stylesheet" href="<?= asset("css/print.css")?>" type="text/css" media="print"/>
		
		<link rel="stylesheet" href="<?= asset("plugins/font-awesome/css/font-awesome-ie7.min.css")?>">
		
		
	</head>

	<!-- start: BODY -->
	<body class="error-full-page">
		<!-- start: PAGE -->
		<div class="container">
			<div class="row">
				<!-- start: 404 -->
				<div class="col-sm-12 page-error animated shake">
					<div class="error-number text-azure">
					<?=  $error->about ?>
					<!-- <?=  $error->code ?> -->
					</div>
					<div class="error-details col-sm-6 col-sm-offset-3">
						<h3><?=  $error->title ?></h3>
						<p>
						<?=  $error->message ?>
							
							<br>
							
							<a href="<?= url ("")?> " class="btn btn-red btn-return">
							Continue Navegando...
							</a>
						</p>
					
					</div>
				</div>
				<!-- end: 404 -->
			</div>
		</div>
	
	<!-- end: BODY -->

<!-- Mirrored from www.cliptheme.com/demo/rapido/utility_404_example2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 21:52:48 GMT -->
</html>