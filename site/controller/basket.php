<?php
	
	if(isset($_SESSION['basket']) == FALSE){
		$_SESSION['basket'] = array();
		$_SESSION['basket']['idProduct'] = array();
		$_SESSION['basket']['quantity'] = array();
	}

	
	function addToBasket($select){
		array_push($_SESSION['basket']['idProduct'],$select['id']);
		array_push($_SESSION['basket']['quantity'],$select['quantity']);
	}

	
	if(isset($_POST["add"])){
		$idProduct = $_POST['idProduct'];
		$quantity = $_POST['quantity'];
		var_dump($idProduct);
		$select['id'] = $idProduct;
		$select['quantity'] = $quantity;
		addToBasket($select);
	}

	?>