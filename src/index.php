<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php advanced</title>
</head>
<body>
    <?php
$products = array(
  "Electronics" => array(
    "Television" => array(
      array(
      "id" => "PR001",
      "name" => "MAX-001",
      "brand" => "Samsung"
      ),
      array(
      "id" => "PR002",
      "name" => "BIG-301",
      "brand" => "Bravia"
      ),
      array(
      "id" => "PR003",
      "name" => "APL-02",
      "brand" => "Apple"
      )
    ),
    "Mobile" => array(
      array(
      "id" => "PR004",
      "name" => "GT-1980",
      "brand" => "Samsung"
      ),
      array(
      "id" => "PR005",
      "name" => "IG-5467",
      "brand" => "Motorola"
      ),
      array(
      "id" => "PR006",
      "name" => "IP-8930",
      "brand" => "Apple"
      )
    )
  ),
  "Jewelry" => array(
    "Earrings" => array(
      array(
      "id" => "PR007",
      "name" => "ER-001",
      "brand" => "Chopard"
      ),
      array(
      "id" => "PR008",
      "name" => "ER-002",
      "brand" => "Mikimoto"
      ),
      array(
      "id" => "PR009",
      "name" => "ER-003",
      "brand" => "Bvlgari"
      )
    ),
    "Necklaces" => array(
      array(
      "id" => "PR010",
      "name" => "NK-001",
      "brand" => "Piaget"
      ),
      array(
      "id" => "PR011",
      "name" => "NK-002",
      "brand" => "Graff"
      ),
      array(
      "id" => "PR012",
      "name" => "NK-003",
      "brand" => "Tiffany"
      )
    )
  )
      );
      echo "<h1>Product Table </h1>";
     echo "<table border = '2px' cellpading = '5px' cellspacing = '0px'>
     <tr>
     <th>Category</th>
     <th>Subcategory</th>
     <th>ID</th>
     <th>Name</th>
     <th>Brand</th>
     <tr>";
     foreach ($products as $key => $value) {
         foreach ($value as $key1 => $value1) {
             foreach ($value1 as $key2 => $value2) {
                 echo "<tr>";
                 echo "<td>$key</td>";
                 echo "<td>$key1</td>";
                 foreach ($value2 as $key3 => $value3) {
                     echo "<td>$value3</td>";
                     # code..
                 }
                 echo "</tr>";
                 # code...
             }
             # code...
         }
         # code...
     }
     echo "</table>";
     echo "<h1>Mobile Table</h1>";
     echo "<table border = '2px' cellpading = '5px' cellspacing = '0px'>
     <tr>
     <th>Category</th>
     <th>Subcategory</th>
     <th>ID</th>
     <th>Name</th>
     <th>Brand</th>
     <tr>";
     foreach ($products as $key => $val1) {
      foreach ($val1 as $key1 => $val2) {
          foreach ($val2 as $key2 => $val3) {
            if($key1=="Mobile"){
            echo "<tr>";
            echo "<td>$key</td>";
            echo $key;
            echo "<td>$key1</td>";
            echo "<td>$val3[id]</td>";
            echo "<td>$val3[name]</td>";
            echo "<td>$val3[brand]</td>";
           
          }
          echo "</tr>";
        }
        }
      };
      echo "<br>";
      echo "</table>";
      echo "<h1>Deletion And Updation </h1>";
      foreach ($products as $key => $val1) {
        foreach ($val1 as $key1 => $val2) {
            foreach ($val2 as $key2 => $val3) {
              if($val3['id']=="PR003"){
                unset($val3);

              }
              elseif($val3["id"]=="PR002"){
                $val3["name"] == "BIG-555";
              }
              echo "<p> Product ID:$val3[id]<br> Product Name:$val3[name]<br> Product Brand:$val3[brand]<br> Category:$key<br> Subcategory:$key1 </p>";
            }
          }
        };
?>

</body>
</html>