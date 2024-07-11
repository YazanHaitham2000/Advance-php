<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task5</title>
</head>
<body>
    <div id="time"></div>
    <?php
    date_default_timezone_set("UTC");
    $date=date("Y-m-d H:i:s");
    echo "$date";
    ?>
</body>
</html>