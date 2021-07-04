<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h1>Hello World</h1>";
      // Variables must start with a dollar sign and have no spaces
      $name = "Bob the Builder";
      $age = 24;
      echo "<h2>$name is $age years old</h2>";
      // if statements use brakcets for the condition
      // we use curly braces aound the code to be executed
      if ($age >= 25) {
        echo "<h1>H</h1>";
      } else if ($age >= 15) {
        echo "<h1>He's in his prime</h1>";
      } else {
        echo "<h1> he is getting older</h1>";
      }
$counter = 1;
do {
  echo "<p>$counter</p>";
  $counter += 1;
} while ($counter <= 10);




     ?>
  </body>
</html>
