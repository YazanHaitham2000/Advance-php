<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
<body>
    <form method="post">
        <div><input type="url" class="url" name="url" placeholder="https://www.org.com" required></div>
        <div><button type="submit" class="btn" name="submit">GO</button></div>
    </form>
<?php
if(isset($_POST['submit'])){
    $url=$_POST['url'];
    header("Location:$url");
    exit();
}
?>
</body>
</html>