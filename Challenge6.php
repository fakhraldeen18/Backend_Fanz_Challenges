<?php

function PrimeNumbers($start, $end) {
 //Initialize an empty array to store the prime numbers   

  $primeNumbers = [];
// Iterate through each number from $start to $end
  for ($number = $start; $number <= $end; $number++) {
    $isPrime = true;

    // Check if the number is less than or equal to 1
    // If so, it is not a prime number
    if ($number <= 1) {
      $isPrime = false;
    }


    // Check if the number is divisible by any number from 2 to sqrt($number)
    // If it is, then it is not a prime number
    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
        $isPrime = false;
        break;
      }
    }

    // If the number is prime, add it to the $primeNumbers array
    if ($isPrime) {
      $primeNumbers[] = $number;
    }
  }

  return $primeNumbers;
}
echo"Challenge 6\n";
$start = 1;
$end = 20;
$primeNumbers = PrimeNumbers($start, $end);
echo "Prime numbers between {$start} and {$end} = ";
foreach ($primeNumbers as $primeNumber) {
  echo $primeNumber. ", ";
}