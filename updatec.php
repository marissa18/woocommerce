
 <?php 
  
   require 'authentification.php';

     $id = $_POST['id'];
     $username= $_POST['cusername'];
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
    ]
  
    ];

   $woocommerce->put('customers/'.$id, $data);

   header ('Location: listCustomer.php');
  
  ?>