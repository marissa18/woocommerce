

 <?php

   require 'authentification.php';
  
   $id = $_GET['id'];

   $cs = json_encode ($woocommerce->get('customers/'.$id)); 
   $cs = json_decode ($cs,true);

 ?>

<form  action='updatec.php'  method='POST'  align="center" >
   
    <h2>Mettre a jours le client:</h2><br>

    <label>Username:</label><br>
    <input type="text" name="cusername" value ="<?php echo $cs['username']; ?>"> <br>

    <label>Nom:</label><br>
    <input type="text" name="cnom" value ="<?php echo $cs['first_name']; ?>"><br>

    <label>Prenom:</label><br>
    <input type="text" name="cprenom"  value ="<?php echo $cs['last_name']; ?> "><br>

    <label>Email:</label><br>
    <input type="text"  name="email" value ="<?php echo $cs['email']; ?>"><br>

    <input type="hidden" value ="<?php echo $id; ?>"  name="id">
    <br><input type="submit" value="Modifier">

</form>
