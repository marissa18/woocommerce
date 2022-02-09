


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

    <?php
         require 'authentification.php';
        
         $customers = json_encode($woocommerce->get('customers'));
         $customers = json_decode( $customers,true);
     ?>

  <div  class="container" align="center" >
            <h2>liste des Clients </h2>
            <a href="addcustomer.php">Ajouter client</a>
            <br>
            <br>
            <br>

  <table class="table table-hover" align="center">
          <tr>
               <th>Username</th>
               <th></th>
               <th>Nom</th>
               <th></th>
               <th>Prenom</th>
               <th></th>
               <th>Email</th>
               <th>Action</th>
          </tr>

  <?php
    foreach($customers  as $cust )
    {
        echo ' <tr>';
                echo '<td>' .$cust ['username']. '</td>';
                echo '<td>  </td>';
                echo '<td>' .$cust['last_name']. '</td>';
                echo '<td>  </td>';
                echo '<td>' .$cust['first_name']. '</td>';
                echo '<td>  </td>';
                echo '<td>' .$cust['email']. '</td>';

                echo '<td>  <a href="updatecustomer.php?id='.$cust['id'].'"> Update</a> 
                      <a href="deletecustomer.php?id='.$cust['id'].'">Delete</a> </td>';
        echo ' <tr>';
     }
  ?> 
</table>
</div>
</body>
</html>