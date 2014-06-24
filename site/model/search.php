<?php

if(isset($_POST["search"])){

		global $bdd;
		$keyword = $_POST['search'];
		$result = $bdd->prepare("SELECT * FROM product WHERE NAMEPRODUCT LIKE \"%".$keyword."%\"");
		$result->execute();


		
		while($row = $result->fetch()){
			echo $row["NAMEPRODUCT"];
			echo "<br><br/>";
			echo $row["DESCRIPTION"];
			echo "<br><br/>";
			echo $row["PRICE"];
			echo "<br><br>";


			/*$url = $row["price"];
			echo " | <a href=\"$url\">$url</a>";*/

			
		}
			
		
}
	
?>

      <form action="#" method="post">
         
         <table>
            <tr>
               <td><label for="search"><strong>Search</strong></label></td>
               <td><input type="text" name="search" id="search"/></td>
            </tr>  
         </table>
         <input type="submit" name="research"/>
      
      </form>


