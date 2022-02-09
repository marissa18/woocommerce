
<!DOCTYPE html>
<html>

   <head>
         <title>Page Title</title>
   </head>

   <body>
    
      <?php
             require 'authentification.php';
             $products = json_encode($woocommerce->get('products'));
             $products = json_decode($products, true);
      ?>

       <div align="center">
       <h1 >liste des produits </h1>
       <a href="addproduct.php">Ajouter produit</a>
       </div>
       <br>
       <br>
      <table class="table table-hover" align="center">
           <tr>
                <th>nom</th>
                <th>stock</th>
                <th> </th>

                <th>prix</th>
                <th> </th>

                <th>categorie</th>
                <th> </th>

                <th>image</th>
                
                <th>action</th>
           </tr>
      <?php
              foreach($products as $pd )
           {
            echo ' <tr>';
                     echo '<td>' .$pd ['name']. '</td>';
                     echo '<td>' .$pd ['stock_quantity']. '</td>';
                     echo '<td>  </td>';
                     echo '<td>' .$pd ['regular_price']. '</td>';
                     echo '<td>  </td>';
                     echo '<td>' .$pd ['categories'][0]['name']. '</td>';
                     echo '<td>  </td>';
                     echo '<td>  <img height="50px" width="50px" src="'.$pd["images"][0]["src"].'"> </td>';
                     echo '<td>  <a href="updateproduct.php?id='.$pd['id'].'">Update</a> 
                                 <a href="deleteproduct.php?id='.$pd['id'].'">Delete</a> </td>';
            echo ' <tr>';
            }
   ?>
       </table>
   </body>
  </html>