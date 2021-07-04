
<?php

if (!isset($_GET['guess'])or $_GET['guess']=="") {
  header("Location:numberguess.php");
}
$number = $_GET['guess'];





 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php

echo "<h1>You clicked number $number</h1>";


 ?>

<form class="" action="numberguess.php" method="post">


  <button type="submit" name="button">Back</button>
</form>


  </body>
</html>
