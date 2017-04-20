<?php
	$page=@$_GET["page"];
	$veri="";
	$value = explode("-", $page);

	for ($i=0; $i < sizeof($value); $i++) {
		$veri = $veri . ucwords( $value[$i]." ");

	}
	@define(ITEM_NAME, $veri);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title><?php if ( ITEM_NAME == " " ) { ltrim(ITEM_NAME, "-"); }else{ echo(ITEM_NAME." - "); } ?> Ali Bebe Mobilya</title>

	<!-- META -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ali Bebe Mobilya, Kaliteli mobilyalar ve bir çok yeni tasarım" />
	<meta name="keywords" content="ali bebe,mobilya,<?php echo strtolower(ITEM_NAME); ?>,bebek,mobilyalar,alibebemobilya,mobi" />
	<meta name="author" content="baharajans" />

	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600|Open+Sans:300,400,700" rel="stylesheet"  />

	<!-- Include All CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<!-- Include All JS -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><!-- Jquery Library -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap JS -->
	<script type="text/javascript" src="js/jquery.aniview.min.js"></script><!-- Animate JS -->
	<script type="text/javascript" src="js/parallax.min.js"></script><!-- Parallax JS -->
	<script type="text/javascript" src="js/lightbox.js"></script><!-- LightBox JS -->
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script><!-- bxslider JS -->
	<script type="text/javascript" src="js/jquery.zoom.min.js"></script><!-- zoom JS -->
	<script type="text/javascript" src="js/local.js"></script><!-- LOCAL JS -->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>

<header>
	<div class="header">
		<div class="container">
			<div class="row">
				<ul>
					<li><i class="fa fa-phone"></i> 0850 0212 12 34</li>
				</ul>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Menü</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="index.php"><img src="images/logo.jpg" width="100"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Anasayfa</a></li>
					<li><a href="index.php?page=hakkimizda">Hakkımızda</a></li>
					<li><a href="index.php?page=bebek-odasi">Bebek Odası</a></li>
					<li><a href="index.php?page=genc-odasi">Genç Odası</a></li>
					<li><a href="index.php?page=iletisim">İletişim</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tekil Ürünler <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?page=karyolalar">Karyolalar</a></li>
							<li><a href="index.php?page=besikler">Beşikler</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="renkli-footer"></div>
</header>