
 <?php

   require 'authentification.php';
  
   $id = $_GET['id'];

   $prod = json_encode ($woocommerce->get('products/'.$id)); 
   $prod = json_decode ($prod,true);

 ?>

 <form  action='updatep.php'  method='POST' align="center" >
   
      <h2>Mettre a jours le produit:</h2><br>

      <label>Nom:</label><br>
      <input type="text" name="pnom" value ="<?php echo $prod['name']; ?>"> <br>

      <label>Quantite:</label><br>
      <input type="text" name="pquantity" value ="<?php echo $prod['stock_quantity']; ?>"><br>

      <label>Prix:</label><br>
      <input type="text" name="pprix"  value ="<?php echo $prod['regular_price']; ?> "><br>

      <label for="lname">Categorie:</label><br>
      <input type="text"  name="pcategorie" value ="<?php echo $prod['categories'][0]['name']; ?>"><br>

      <input type="hidden" value ="<?php echo $id; ?>"  name="id">
      <br><input type="submit" value="Modifier">
 </form>
