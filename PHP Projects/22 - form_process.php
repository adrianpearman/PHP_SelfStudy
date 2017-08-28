<?php
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $maximum = 15;
    $name = array('adrian', 'kelsey', 'mackenzie', 'terry', 'iris');

    // echo $username. " " . $password;
    if (strlen($username) < $minimum) {
      echo "Username must be more than ${minimum} characters";
    }

    if (strlen($username) > $maximum) {
      echo "Username must be less than ${maximum} characters";
    }

    if (!in_array($username, $name)) {
      echo "Sorry, you do not have access";
    }else {
      echo "Welcome back, ${username}";
    }
  }
 ?>
