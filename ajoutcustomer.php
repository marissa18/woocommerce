

<?php
 require 'authentification.php';

     $username= $_POST['username'];
     $nom= $_POST['cnom'];
     $prenom= $_POST['cprenom'];
     $email= $_POST['email'];



     $data = [
    'email' => $email,
    'first_name' =>  $prenom,
    'last_name' =>  $nom,
    'username' => $username,


    'billing' => [
        'first_name' =>  $prenom,
        'last_name' =>  $nom,
        'email' => $email,     
    ],
  
    ];

   $woocommerce->post('customers', $data);

   header ('Location: listCustomer.php');

?>