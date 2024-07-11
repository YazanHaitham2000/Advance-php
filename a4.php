<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4</title>
</head>
<body>
  <form action="a4.php" method="post">
    <input type="text" name="text" required>
    <button type="submit" name="submit">submit</button>
  </form> 
  <?php 
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["text"];
    echo "<h2>Hello,$name!</h2>";
  }
  ?> 
</body>
</html>