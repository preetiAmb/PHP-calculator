<?php

if (count($argv) != 4) {
    echo "Usage: php calculator.php <operator> <num1> <num2>\n";
    exit(1);
}

$operator = $argv[1];
$num1 = $argv[2];
$num2 = $argv[3];

if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: Both arguments must be numeric\n";
    exit(1);
}

$result = 0;
switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        
        if ($num2 == 0) {
            echo "Error: Division by zero\n";
            exit(1);
        }
        $result = $num1 / $num2;
        break;
    default:
        echo "Error: Invalid operator\n";
        exit(1);
}

echo "The result is: " . $result . "\n";
