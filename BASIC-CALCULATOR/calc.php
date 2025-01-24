<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
         <title> Calculator </title> 
         <link rel="stylesheet" href="styles1.css">
        </head> 
        <body> 
        <h1><strong>Calculator</strong></h1> 
        <form method="post" action=""> 
        <input type="number" name="num1" placeholder="Enter first number" required>
        <label for="num2">Enter Second Number (if required):</label>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <br>
        <button type="submit" name="operation" value="add"><strong>+</strong></button>
        <button type="submit" name="operation" value="subtract"><strong>-</strong></button>
        <button type="submit" name="operation" value="multiply"><strong>X</strong></button>
        <br><br>
        <button type="submit" name="operation" value="divide"><strong>/</strong></button>
        <button type="submit" name="operation" value="squareroot"><strong>SQRT(√)</strong></button>
        <button type="submit" name="operation" value="log"><strong>Log(base 10)</strong></button>
    <br>
    <br>
    <button type="submit" name="calculate">Calculate</button> </form>

        
        <?php                                           //php script
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];    
    
            switch ($operation) 
            {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                case 'squareroot':
                    $result = sqrt($num1);
                    break;
                case 'log':
                    $result = log10($num1);
                    break;
                default:
                    $result = "Invalid operation";
                    break;
            }
            echo "<h2>Result: $result</h2>";
        }
    
        ?>
</body></html>


       