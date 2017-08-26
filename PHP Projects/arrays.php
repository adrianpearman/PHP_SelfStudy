<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $numberList = array(23,64,267,478,267,8765,'5345',345,'<h1>Hello</h1>');

    // this is how to call an array value
    echo $numberList[0];
    echo '<br>';
    // print_r will retun the array object
    echo print_r($numberList);
     ?>
  </body>
</html>
