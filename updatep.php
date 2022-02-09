 <?php 
  
   require 'authentification.php';

     $id = $_POST['id'];
     $nom= $_POST['pnom'];
     $quabtity= $_POST['pquantity'];
     $prix= $_POST['pprix'];
     $categorie= $_POST['pcategorie'];


    $data = [
    
     'name' =>$nom ,
     'regular_price' => $prix,
     'stock_quantity' =>$quabtity,
     
    'categories' => [
        [
            'id' => 1,
            'name' =>$categorie
        ]
  
    ] 
    ];

    $woocommerce->put('products/'.$id, $data);

   header ('Location: listproduct.php');
  
  ?>