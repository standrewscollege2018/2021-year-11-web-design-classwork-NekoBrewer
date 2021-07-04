



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Click on this safe link for free robux!!!!!!</h1>

<p><a href="get2.php?name=bob&age=15">Clicke here for free robux!!!</a></p>




<h1>Guess my name</h1>

<form class="" action="get2.php" method="post">
<input type="text" name="guess" placeholder="Guess my name">
<button type="button" name="button">Submit</button>


<?php
if (isset($_GET['error'])) {
  echo "<p>Please enter a name</p>"
}

 ?>

</form>

  </body>
</html>
