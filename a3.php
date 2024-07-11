<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<body>
    <form method="post">
        <input type="text" name="text" placeholder="Enter your task">
        <button type="submit" name="add">add</button>
    </form>
    <?php
    session_start();
    if(!isset($_SESSION["text"])){
        $_SESSION["text"]=[];
    }
    if(isset($_POST["add"])){
        $add=$_POST["text"];
        $_SESSION["text"][]=$add;
    }
    if(isset($_POST["delete"])){
        $index=$_POST["delete"];
        unset($_SESSION["text"][$index]);
    }
    if(!empty($_SESSION["text"])){
        echo "<ul>";
        foreach($_SESSION["text"] as $index=>$add){
            echo "<li>$add
                 <form method='post' style='display:inline;' >
                 <button type='submit' name='delete' value='$index'>delete</button></form></li>";
        }
        echo "</ul>";
    }else{
        echo "No task";
    }


    ?>
</body>
</html>