<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <header>
        <h1>
            calclator
        </h1>
    </header>
    <form action="index.php" method="post">
        <label>
            write your first number
        </label>
        <br>
        <input name="1num" type="number">
        <br>
        <label>
            write your sign
        </label>
        <br>
        <input type="text" name="sign">
        <br>
        <label>
            write your second number
        </label>
        <br>
        <input name="2num" type="number">
        <br>
        <button>
            calculate
        </button>
    </form>
</body>
</html>
<?php
    $second = $_POST["2num"];
    $first = $_POST["1num"];
    $operator = $_POST["sign"];
    if ($operator == "plus"){
        echo $first + $second;
    }
    elseif($operator == "divide"){
        echo $first / $second;
    }
    elseif($operator == "multiply"){
        echo $first * $second;
    }
    elseif($operator == "minus"){
        echo $first - $second;  
    }
?>