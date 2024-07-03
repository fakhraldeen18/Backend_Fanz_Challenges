# Backend_Fanz_Challenges

### Challenge 1: Abstract Class vs. Interface 
**Question:**
 What is the main difference between an abstract class and an interface in PHP? Provide an example of a scenario where you would prefer to use an abstract class over an interface.
 
**Answer:**

In PHP, the main difference between an abstract class and an interface is that an abstract class can contain concrete methods with implementation or without implementation. whereas an interface can only have method signatures (methods without implementation).

Interface:
- Suitable for unrelated classes following a contract
- Only declares methods and properties, no implementation
Abstract:
- Best for related classes with shared behavior
- Contains state, constructors, fully implemented methods

**Scenario:**
Let's say we are building a system for different types of vehicles.
You could have an abstract class Vehicle which provides some common methods that are shared by all vehicles, such as startEngine() and stopEngine().