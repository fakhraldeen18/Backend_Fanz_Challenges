
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

echo"Challenge 1\n";
echo"============================================== \n";
$car = new Car();
$car->drive();

$plane = new Airplane();
$plane->startEngine();
$plane->drive();
echo"==============================================";
?>
