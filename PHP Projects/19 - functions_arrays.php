<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $number = array(234,2325,654452,478,336,132,232,1);
    // prints largest value in the array
    echo max($number);
    echo "<br>";
    // prints smallest value in the array
    echo min($number);
    echo "<br>";
    // sorts the array from smallest to largest
    sort($number);
    print_r($number);
    echo "<br>";
     ?>
  </body>
</html>
