<?php
// Function to find the maximum and minimum values in an array
function findMaxMin($array)
{
    $max = $array[0]; // Initialize the maximum value with the first element of the array
    $min = $array[0]; // Initialize the minimum value with the first element of the array
    $numberOfElements = count($array); // The number of elements in the array

    for ($i = 1; $i < $numberOfElements; $i++){
        if ($array[$i] > $max){
            $max = $array[$i]; // If the current element is greater than the current maximum, update the maximum value
        }
        if ($array[$i] < $min){
            $min = $array[$i]; // If the current element is less than the current minimum, update the minimum value
        }
    }
    echo "Max: ". $max. ", Min: ". $min; // Display the maximum and minimum values.
}
echo"Challenge 3\n";
$numbers = array(190, 266, 31, 424, 57, 64, 70, 86, 99, 10);
findMaxMin($numbers)
?>