<?php
   include('session.php');
   include('config.php');

   $ses_sql = mysqli_query($db,"
                                 select
                                 pe.entity_id,
                                 pe.sku,
                                 pev1.`value` as name,
                                 pev2.`value` as brand,
                                 pet.`value` as description,
                                 pei1.`value` as status,
                                 ped1.`value` as price,
                                 ped2.`value` as special_price,
                                 pev3.`value` as size,
                                 pev4.`value` as footbed,
                                 pei2.`value` as gender,
                                 pev5.`value` as model

                                 from product_entity as pe
                                 LEFT JOIN product_entity_int as pei1 ON pei1.entity_id = pe.entity_id AND pei1.attribute_id = 4
                                 LEFT JOIN product_entity_int as pei2 ON pei2.entity_id = pe.entity_id AND pei2.attribute_id = 10
                                 LEFT JOIN product_entity_text as pet ON pet.entity_id = pe.entity_id AND pet.attribute_id = 3
                                 LEFT JOIN product_entity_varchar as pev1 ON pev1.entity_id = pe.entity_id AND pev1.attribute_id = 1
                                 LEFT JOIN product_entity_varchar as pev2 ON pev2.entity_id = pe.entity_id AND pev2.attribute_id = 2
                                 LEFT JOIN product_entity_varchar as pev3 ON pev3.entity_id = pe.entity_id AND pev3.attribute_id = 7
                                 LEFT JOIN product_entity_varchar as pev4 ON pev4.entity_id = pe.entity_id AND pev4.attribute_id = 8
                                 LEFT JOIN product_entity_varchar as pev5 ON pev5.entity_id = pe.entity_id AND pev5.attribute_id = 11
                                 LEFT JOIN product_entity_decimal as ped1 ON ped1.entity_id = pe.entity_id AND ped1.attribute_id = 5
                                 LEFT JOIN product_entity_decimal as ped2 ON ped2.entity_id = pe.entity_id AND ped2.attribute_id = 6

                                 GROUP BY sku
                                 ");

   $row = mysqli_fetch_all($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['username'];
?>
<html>
   
   <head>
      <meta charset="UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

      <h4><a href = "products.php">Get All Products</a></h4>
      <h4><a href = "attributes.php">Get All Attributes</a></h4>

      <?php 
         foreach ($row as $key => $value) {
            echo '<pre>';
            print_r($value);
            echo '</pre>';
         }
      ?>
   </body>
   
</html>