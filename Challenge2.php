<?php
// Challenge 2

// Function to calculate the factorial of a given number recursively
function Factorial($num)
{
    if ($num < 0){
        echo "Error: Negative numbers are not allowed.";  // If the number is negative, display an error message
        return; // Exit the function
    }
    elseif($num === 0){
        return 1; // Base case: if the number is 0, return 1 because the factorial of 0 is 1.
    }
    else
    {
        return $num* Factorial($num -1); // Recursive call to calculate the factorial of the given number.
    }
}
echo"Challenge 2\n";
$number = 5;
echo "Factorial " . $number . " = " .Factorial($number)."\n";

?>