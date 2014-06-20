<?php

if(isset($_POST["search"])){

		global $bdd;
		$result = $bdd->prepare("SELECT * FROM product WHERE * LIKE \"".$keyword."\"");
		$result->execute();

		if($result){
			
			if(mysql_num_rows($result)==0) echo "<center><b>Pas de RÃ©sultat</b></center>"; else                {
				echo "<center><b>RÃ©sultat(s)</b></center><br>";
				while($row = mysql_fetch_array($result)){
					echo $row["titre"];
					$url = $row["url"];
					echo " | < a href=\"$url\">$url</a>";
				}

				mysql_free_result($result);
			}

		}
}
	
?>

      <form action="#" method="post">
         
         <table>
            <tr>
               <td><label for="search"><strong>Nom de compte</strong></label></td>
               <td><input type="text" name="search" id="search"/></td>
            </tr>  
         </table>
         <input type="submit" name="search" value="Rechercher"/>
      
      </form>


