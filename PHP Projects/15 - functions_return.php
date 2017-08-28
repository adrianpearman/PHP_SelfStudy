<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function addNumbers($number1, $number2){
        $sum = $number1 + $number2;
        return $sum;
      }

      // these functions are passing the result value through the different the functions. (personally i would change each instance of the variable name to avoid debugging concerns further in the future )
      $result = addNumbers(10,23);
      echo $result. '<br>';
      $result = addNumbers(100, $result);
      echo $result. '<br>';
      $result = addNumbers(234, $result);
      echo $result. '<br>';


     ?>
  </body>
</html>
