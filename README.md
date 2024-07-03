# Backend_Fanz_Challenges

### Challenge 1: Abstract Class vs. Interface 
**Question:**

 What is the main difference between an abstract class and an interface in PHP? Provide an example of a scenario where you would prefer to use an abstract class over an interface.
 

**Answer:**

In PHP, the main difference between an abstract class and an interface is that an abstract class can contain concrete methods with implementation or without implementation. whereas an interface can only have method signatures (methods without implementation).

**Interface:**

- Suitable for unrelated classes following a contract
- Only declares methods and properties, no implementation


**Abstract:**

- Best for related classes with shared behavior
- Contains state, constructors, fully implemented methods

**Scenario:**

Let's say we are building a system for different types of vehicles.
You could have an abstract class Vehicle which provides some common methods that are shared by all vehicles, such as startEngine() and stopEngine().

### Challenge 2: Recursive Factorial Function  
**Question:**

 Write a PHP function that calculates the factorial of a given positive integer using a recursive function. Ensure that your code handles edge cases, such as when the input is 0.

 **Answer:**

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


### Challenge 3: Find Max and Min in Array   
**Question:** 

You are given an array of integers. Write a PHP function that finds the maximum and minimum values in the array. Explain the time complexity of your solution.

**Answer:**

The time complexity of my solution is O(numberOfElements) because we iterate once a time in the array to find the minimum and maximum.

### Challenge 4: Decimal to Binary Conversion    
**Question:** 

Implement a PHP function that converts a given decimal number into its binary representation using bitwise operators. Explain the bitwise operations used in your code. 

**Bitwise Operations:**

**(% Modulus Operator):** It calculates the remainder of the decimal number divided by 2 I use the modulus operator in line (5) to get the least bit of the decimal number.

**(>>= Right Shift Operator):** It used to shift the bits to the left of the first operand by the number of positions.
I used to shift the decimal number right by 1 position in line (6).


### Challenge 5: Fibonacci Sequence (Laravel Way)  
**Question:** 

Create a PHP function (Laravel way) that generates a Fibonacci sequence of a specified length. Explain whether you would use recursion or iteration for this task, and provide your implementation. 

**Answer:** 

When generating a Fibonacci sequence, iteration is usually more efficient than recursion because of the overhead that recursion introduces, and for large lengths may result in excessive function calls and slower performance.

### Challenge 6: Find Prime Numbers in a Range   
**Question:**

 Create a PHP function that finds all prime numbers in a given range and displays them. 


    function PrimeNumbers($start, $end) {
    $primeNumbers = [];

    for ($number = $start; $number <= $end; $number++) {
        $isPrime = true;

    if ($number <= 1) {
      $isPrime = false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
        $isPrime = false;
        break;
      }
    }

      if ($isPrime) {
        $primeNumbers[] = $number;
      }
    }

        return $primeNumbers;
    }


### Challenge 7: Palindrome Check
**Question:** 

Implement a PHP function that checks if a given string is a palindrome (reads the same forwards and backwards) while ignoring spaces, punctuation, and capitalization. 

**Answer:**

    function isPalindrome($str) {
        // Remove spaces, punctuation, and convert to lowercase
            $clean = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));

        // Reverse the string
        $reversed = strrev($clean);

        // Check if the reversed string is equal to the original string
        return $clean === $reversed;
    }

