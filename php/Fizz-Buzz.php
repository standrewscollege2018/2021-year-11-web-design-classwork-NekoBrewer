<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

$counter = 1;

do {

  if ($counter % 3 == 0) {
    echo "<p>Fizz</p>";
  }
  elseif ($counter % 5 == 0) {
    echo "Buzz";
  }
  elseif ($counter % 3 == 0 and $counter % 5 == 0) {
    echo "Fizz-Buzz";
  }
  else {
      echo "<p>$counter</p>";
  }


  $counter += 1;
} while ($counter <= 100);




 ?>




  </body>
</html>
