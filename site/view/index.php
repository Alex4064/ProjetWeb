<!DOCTYPE html>

<html lang="fr">
<head>
	<title>EXI@STORE</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="bootstrap/css/style.css" media="screen" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="header">
			<!-- Barre de navigation -->

			<div class="navbar navbar-inverse" id="bar">
				<div class="navbar-inner">
					<!-- Bouton apparaissant sur les rÃ©solutions mobiles afin de faire apparaÃ®tre le menu de navigation -->
					 <a class="btn btn-navbar" data-target=".nav-collapse"
					data-toggle="collapse"></a> <a class="brand" href="#" id=
					"exia">EXI@STORE</a> <!-- Structure du menu -->

					<div class="nav-collapse collapse">
						<div class="nav" style="margin-left: 2em">
							<form action="#" class="navbar-search pull-right">
								<input class="search-query span2 pull-right"
								id="search" placeholder="Search" type="text">
								<input class="login span2" placeholder="Login"
								type="text"> <input class="pass span2"
								placeholder="Password" type="password">

								<div class="btn btn-inverse btn-small nav" id=
								"bouton" style="margin-left: 2em">
									Connect
								</div>

								<div class="btn btn-inverse btn-small nav" id=
								"bouton" style="margin-left: 2em">
									Subscribe
								</div><button class="btn btn-inverse btn-small"
								id="basket"></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="menu">
			<div class="btn btn-inverse btn-large menu" id="menu" style=
			"margin-left: 2em">
				INDEX
			</div><br>

			<div class="btn btn-inverse btn-large menu" id="menu" style=
			"margin-left: 2em">
				DVD
			</div><br>
			<!-- Split button -->

			<div class="btn-group">
				<button class="btn btn-danger dropdown-toggle" data-toggle=
				"dropdown" id="type" type="button"><span class=
				"sr-only">Genre</span></button>

				<ul class="dropdown-menu">
					<li><a href="#">Adventure</a></li>

					<li><a href="#">Horror</a></li>

					<li><a href="#">Funny</a></li>

					<li><a href="#">Thriller</a></li>

					<li><a href="#">Sad</a></li>
				</ul>
			</div><br>

			<div class="btn btn-inverse btn-large menu" id="menu" style=
			"margin-left: 2em">
				CD
			</div><br>
			<!-- Split button -->

			<div class="btn-group">
				<button class="btn btn-danger dropdown-toggle" data-toggle=
				"dropdown" id="type2" type="button"><span class=
				"sr-only">Genre</span></button><br>

				<ul class="dropdown-menu">
					<li><a href="#">Rap</a></li>

					<li><a href="#">RNB</a></li>

					<li><a href="#">Electro</a></li>

					<li><a href="#">Rock</a></li>

					<li><a href="#">Reggae</a></li>
				</ul>
			</div>
		</div>

		<div class="topsell"><img alt="" src=
		"C:/Users/Cyprien/Desktop/documentstravail/projet%20web/blabla.jpg">

		<h4>blabla</h4>

		<p>aifhiuahfoaihfauvzvzbuivzbiuzb</p><img alt="" src=
		"C:/Users/Cyprien/Desktop/documentstravail/projet%20web/hebus2.jpg"></div>

		<div class="content">
			<div class="caroussel">
				<div class="carousel slide" id="myCarousel">
					<!-- Carousel items -->

					<div class="carousel-inner">
						<div class="active item">
							<img alt="" src=
							"C:/Users/Cyprien/Desktop/documentstravail/projet%20web/blabla.jpg">

							<div class="carousel-caption">
								<h4>1er slide</h4>

								<p>description de l'image</p>
							</div>
						</div>

						<div class="item">
							<img alt="" src=
							"C:/Users/Cyprien/Desktop/documentstravail/projet%20web/hebus.jpg">

							<div class="carousel-caption">
								<h4>2eme slide</h4>

								<p>description de l'image</p>
							</div>
						</div>

						<div class="item">
							<img alt="" src=
							"C:/Users/Cyprien/Desktop/documentstravail/projet%20web/hebus2.jpg">

							<div class="carousel-caption">
								<h4>3eme slide</h4>

								<p>description de l'image</p>
							</div>
						</div>
					</div><!-- Carousel nav -->
					<a class="carousel-control left" data-slide="prev" href=
					"#myCarousel">‹</a> <a class="carousel-control right"
					data-slide="next" href="#myCarousel">›</a>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="navbar navbar-inverse" id="bar">
				<div class="navbar-inner"></div>
			</div>
		</div>
	</div>
</body>
</html>