<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // global variable
    $x = "outside";
    function convert(){
      global $x; // How to call the global variable within the function
      $x = "inside"; // local variable
    };
    echo $x;
    echo "<br>";
    convert();
    echo $x;

     ?>
  </body>
</html>
