<?php

function isPalindrome($str) {

    // Remove spaces, punctuation, and convert to lowercase
    $clean = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));

    // Reverse the string
    $reversed = strrev($clean);
    
    // Check if the reversed string is equal to the original string
    return $clean === $reversed;
}

$str1 = "Racecar";
$srt2 = "Hello, world!";
echo isPalindrome($str1) ? "palindrome\n" : "not palindrome\n";
echo isPalindrome($srt2) ? "palindrome\n" : "not palindrome\n";
?>