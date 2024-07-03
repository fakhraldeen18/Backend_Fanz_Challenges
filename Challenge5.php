<?php
class SequenceGenerator
{
 // Function to generate Fibonacci sequence
 public static function FibonacciSequence($length)
    {
        // Initialize an empty array to store the sequence
        $sequence = [];
        // Initialize the first two numbers of the sequence
        $sequence[0] = 0;
        $sequence[1] = 1;
        // Calculate the Fibonacci numbers
        for ($i = 2; $i < $length; $i++) {
            $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
        }

        return $sequence;
    }
}
echo"Challenge 5\n";
$length = 10;
// Generate the Fibonacci sequence using the SequenceGenerator class
$sequence = SequenceGenerator::FibonacciSequence($length);
foreach ($sequence as $num){
    echo $num. " ";
}
?>