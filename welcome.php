<?php
   include('session.php');
?>
<html>
   
   <head>
   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

      <h4><a href = "products.php">Get All Products</a></h4>
      <h4><a href = "attributes.php">Get All Attributes</a></h4>
   </body>
   
</html>