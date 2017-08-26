<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // $number = array(10,20,30,40);
    $number = array("jose", "juanita", "jorge", "john");
    // standrd array
    echo "<br>";
    print_r($number);
    echo "<br>";
    // echo $number[2]. '<br>';

    // associative arrays
    $names = array("first_name" => "Edwin", "last_name" => "Diaz");
    print_r($names);
    echo "<br>";
    echo $names['first_name']." ".$names['last_name'];
     ?>
  </body>
</html>
