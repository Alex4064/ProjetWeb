<!DOCTYPE html>
<html lang="fr">
<head>
    <title>EXI@STORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet" media="screen">
	
</head>
    
<body>
     

    <div class="container">
		<div class="header">
			<!-- Barre de navigation -->
				<div id="bar" class="navbar navbar-inverse ">
					<div class="navbar-inner "> 
					<!-- Bouton apparaissant sur les résolutions mobiles afin de faire apparaître le menu de navigation -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</a>
					<a id="exia" class="brand" href="index.html">EXI@STORE</a>
						
					<!-- Structure du menu -->
						<div class="nav-collapse collapse">
							<ul class="nav">
								<form action="#" method="post" class="navbar-search">
								<input  type="text" name="search" class="search-query span2 " placeholder="Search">
								</form>
								
							</ul>
						</div>
						
					   <div class="login">
									
							<input type="text" class="login span2 " placeholder="Login">
							<input type="password" class="pass span2 " placeholder="Password">
							<a href="register.html" ><button id="basket" class="btn btn-inverse btn-small"><i class="icon-white icon-shopping-cart"></i> </button></a>
							<a href="IndexConnect.html" id="bouton" href="#" class="btn btn-inverse btn-small nav">Connect</a>
							<a href="register.html" id="bouton" href="#" class="btn btn-inverse btn-small nav">Subscribe</a>
						</div>
						
					</div>

				</div>
		</div>
        <div class="menusearch" >
			<a href="index.html" id="menu" href="#" class="btn btn-inverse btn-large menu" >INDEX</a></br>
			<a href="products.html" id="menu" href="#" class="btn btn-inverse btn-large menu"><li class="icon-white icon-film"></li> DVD</a></br>
			
			<!-- Split button -->
			<div class="btn-group">
			<button id="type" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Genre</span>
			</button>
			<ul class="dropdown-menu" role="menu">
			<li><a href="#">Adventure</a></li>
			<li><a href="#">Horror</a></li>
			<li><a href="#">Funny</a></li>
			<li><a href="#">Thriller</a></li>
			<li><a href="#">Sad</a></li>
			</ul>
		</div></br>
		<a href="products.html" id="menu" href="#" class="btn btn-inverse btn-large menu "><li class="icon-white icon-music"></li> CD</a></br>
			<!-- Split button -->
		<div class="btn-group">
  
			<button id="type2" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Genre</span>
			</button></br>
			<ul class="dropdown-menu" role="menu">
			<li><a href="#">Rap</a></li>
			<li><a href="#">RNB</a></li>
			<li><a href="#">Electro</a></li>
			<li><a href="#">Rock</a></li>
			<li><a href="#">Reggae</a></li>
			</ul>
		</div>
		</div>


	<?php


	require("./../controller/search.php"); 

	$result = new search();

	if(isset($_POST['search'])) {

	foreach ($result->search($_POST['search']) as $key):

?>


<!-- <div class="screen">
	<div class="col-xs-6 col-md-3">
		<a href="#" class="thumbnail">
	      <img src="<?php echo $key["PICTUREPATH"]; ?>" alt="...">
	      <div class="caption">
	       <div class="name"> <?php echo $key["NAMEPRODUCT"]; ?> <h3></h3></div>
	        <div class="quantity"><?php echo $key["STOCK"]; ?></div> 
			<div class="price"> <?php echo $key["PRICE"]; ?> </div>

        <p>

        <a href="description.php?IDPRODUCT=<?php echo $key["ID_PRODUCT"]; ?>" class="btn btn-primary" role="button">Details</a> 
        <a href="#" class="btn btn-default addToBasket" role="button">Add to basket</a></p>
      </div>
    </div>
  </div>
  </div> -->

  <div class="col-sm-6 col-md-4 search">
    <div class="thumbnail">
     <img src="<?php echo $key["PICTUREPATH"]; ?>" alt="...">
      <div class="caption">
	       <div class="name"> <?php echo $key["NAMEPRODUCT"]; ?> <h3></h3></div>
	        <div class="quantity">Actually in stock: <?php echo $key["STOCK"]; ?></div> 
			<div class="price">Price: <?php echo $key["PRICE"]; ?> € </div>
        <p></p>
        <a href="description.php?IDPRODUCT=<?php echo $key["ID_PRODUCT"]; ?>" class="btn btn-primary" role="button">Details</a> 

        <?php if($key["STOCK"] != 0) { ?>

        <a href=\"#" class="btn btn-default addToBasket" role="button">Add</a></p>

        <?php
        }
        ?>
       
      </div>
    </div>
  </div>


<?php


						endforeach;
	
}


	?>
	
	</div>

			
    
		
    
    
    
		<div class="footer">
    
			<div id="bar" class="navbar navbar-inverse ">
				<div class="navbar-inner ">
				</div>
			</div>
		</div>

    


</body>
</html>