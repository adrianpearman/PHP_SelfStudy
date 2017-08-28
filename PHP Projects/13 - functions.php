<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // setting an inital function that calls the other two functions when this function is called.
    function init(){
      calculate();
      echo "<br>";
      say_Something();
    }

    function calculate(){
      echo 45 + 83230;
    }

    function say_Something(){
      echo "hello world";
      // echo "string";
    }

    init();
     ?>
  </body>
</html>
