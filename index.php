
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


    <?php
         require 'authentification.php';
          $products = json_encode($woocommerce->get('products'));
            $orders = json_encode($woocommerce->get('orders'));
                    $customers = json_encode($woocommerce->get('customers'));
                    $products = json_decode($products, true);
                    $orders = json_decode( $orders,true);
                    $customers = json_decode( $customers,true);
     ?>
  <h1>liste des produits </h1>
  
  <table>
  <tr>
    <th>nom</th>
    <th>stock</th>
    <th>prix</th>
    <th>categorie</th>
    <th>image</th>
     <th>action</th>
  </tr>

</table>

</body>
</html>