<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Calculator (switch statements)</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Number1" required>
        <input type="number" name="num2" placeholder="Number2" required>
        <br><br>
        <button type="submit" name="operation" value="add">+</button>
        <button type="submit" name="operation" value="subtract">-</button>
        <button type="submit" name="operation" value="multiply">*</button>
        <button type="submit" name="operation" value="divide">/</button>
    </form>

    <h3>Result:</h3>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = "";

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "We can't divide with 0";
                    }
                    break;
                default:
                    $result = "Try something else";
            }

            echo $result;
        }
        ?>
    </p>
</body>
</html>
