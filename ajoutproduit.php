
<?php
 require 'authentification.php';

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
            'id' => 9,
            'name' =>$categorie

        ],
        [
            'id' => 14
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ]
];

   $woocommerce->post('products', $data);

   header ('Location: listproduct.php');
?>