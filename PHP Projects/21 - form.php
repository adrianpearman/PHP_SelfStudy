<?php
  // creating a post Super Global Variable
  // when the submit button is pressed, the information from the form is sent as a post request
  if (isset($_POST['submit'])) {

    // setting the variables for the data gathered from the form
    $name = array('adrian', 'kelsey', 'mackenzie', 'terry');
    $username = $_POST['username'];
    $minimum = 5;
    $maximum = 10;
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
      echo "Username must be longer than ${minimum} characters"."<br>";
    };

    if (strlen($username) > $maximum) {
      echo "Username must be less than ${maximum} chatracters"."<br>";
    };

    if (!in_array(strtolower($username), $name)) {
      echo "Sorry you are not allowed"."<br>";
    }else {
      echo "Welcome ${username}";
    };

  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <form class="" action="form.php" method="post">
       <input type="text" name="username" placeholder="Enter Username">
       <input type="password" name="password" placeholder="Enter Password">
       <br>
       <input type="submit" name="submit" value="Submit">
     </form>
</body>
</html>
