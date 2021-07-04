<?php

if (!isset($_POST['guess']) or $_POST['guess']=="") {
//redirect to guess
header("Location: nameguess.php");
}








$guess = $_POST['guess'];

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

$answer = "jim";
if ($guess == $answer) {
  echo "<h1>Good Job $guess was correct</h1>";
}
else {
  echo "<h1>$guess is incorrect please try again</h1>";
}
 ?>

<h1>Go back to guessing page</h1>

<form class="" action="nameguess.php" method="post">


  <button type="submit" name="button">Back</button>
</form>


  </body>
</html>
