<?php
// Check if the correct number of arguments are provided
if (count($argv) != 3) {
    echo "Usage: php calculator.php <num1> <num2>\n";
    exit(1);
}

// Get the numbers from command line arguments
$num1 = $argv[1];
$num2 = $argv[2];

// Validate the input as numbers
if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: Both arguments must be numeric\n";
    exit(1);
}

// Multiply the numbers
$result = $num1 * $num2;

// Print the result
echo "The result of multiplication is: " . $result . "\n";
