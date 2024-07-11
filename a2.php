<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number1" placeholder="Enter number 1"  required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="number2" placeholder="Enter number 2" required>
        <button type="submit" name="submit">calculate</button>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $num1=$_POST["number1"];
        $num2=$_POST["number2"];
        $operation=$_POST["operation"];
        $result=0;
        switch($operation){
            case "add":
                $result=$num1+$num2; break;
            case "subtract":
                $result=$num1-$num2; break;
            case "multiply":
                $result=$num1*$num2; break;
            case "divide":
                $result=$num1/$num2; break;
            default:
           $result="error";

        }
echo "<h2> Reselt:$result</h2>";
    }
    
    ?>
</body>
</html>