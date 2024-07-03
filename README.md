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
