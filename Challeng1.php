
<?php
// Define an abstract class named 'vehicle' which has two implemented method 'startEngine' , 'stopEngin' and one abstract method 'drive'
abstract class vehicle{

    //The method 'startEngine' with implementation
    public function startEngine(){
        echo "Engine started\n";
    }
    
    //The method 'stopEngine' with implementation
    public function stopEngine(){
        echo "Engine stopped\n";
    }

    abstract public function drive(); // Abstract method, implemented by child classes
}

// Define a class 'Car' that extends the 'vehicle' abstract class
class Car extends vehicle{
     // Implementing the abstract method 'drive'
     public function drive(){
         echo "Car is driving\n";
        }
    }
    
    // Define a class 'Airplane' that extends the 'vehicle' abstract class
    class Airplane extends vehicle{
        
        // Implementing the abstract method 'drive'
        public function drive(){
        echo "Airplane is flying\n";
    }
}

/*
In this example, each subclass like Car and 
Airplane must implement the drive() method as they drive differently but can inherit the startEngine() method.
So, the abstract classes are more grateful when we have related classes, 
whereas the interface is best suited for defining contracts where multiple unrelated classes need to implement the same methods.
*/

echo"Challenge 1\n";
$car = new Car();
$car->drive();

$plane = new Airplane();
$plane->startEngine();
$plane->drive();
?>
