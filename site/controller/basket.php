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

      <form action="#" method="post">
         <table>
            <tr>
               <td><label for="idProduct"><strong>ID objet</strong></label></td>
               <td><input type="text" name="idProduct" id="idProduct"/></td>

               <td><label for="quantity"><strong>Quantity</strong></label></td>
               <td><input type="text" name="quantity" id="quantity"/></td>
            </tr>  
         </table>
         <input type="submit" name="add"/>
      </form>

<?php
var_dump($_SESSION['basket']);
?> 