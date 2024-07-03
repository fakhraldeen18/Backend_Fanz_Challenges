<?php
// Function to convert a decimal number to binary
function decimalToBinary($decimal) {
    // Check if the decimal number is 0, return '0' if true
    if ($decimal == 0) return '0';
    // Initialize an empty string to store the binary representation
    $binary = '';
    // Convert the decimal number to binary using a while loop
    while ($decimal > 0) {
        // Get the remainder when dividing the decimal number by 2 and append it to the binary string
        $binary = ($decimal % 2) . $binary;
        // Right shift the decimal number by 1 (equivalent to dividing by 2)
        $decimal = $decimal >> 1;
    }
    
    // Return the binary representation of the decimal number
    return $binary;
}
echo"Challenge 4\n";
$decimalNumber = 15;
$binaryNumber = decimalToBinary($decimalNumber);
echo "Binary representation of $decimalNumber is: $binaryNumber\n";
?>