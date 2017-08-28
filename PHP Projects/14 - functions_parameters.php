<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function greeting($message){
        echo $message. '<br>';
      }
      greeting('simple as simple does');

      function calculate($number1, $number2){
        $sum = $number1 + $number2;
        echo $sum. '<br>';
      }

      calculate(12,23);
     ?>
  </body>
</html>
