<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
    </head>
	<body>
      <p>
      <?php
        // Create the Class
        class Person {
            // Create Properties - (Variables tied to objects)
            public $firstname;
            public $lastname;
            public $age;
            
            // Assigning Values to the Property Variables
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Create a Method (Function tied to an Object)
            public function hello() {
              return "I am " . $this->firstname . " " . $this->lastname . ", my age is: " . $this->age . "";
            }
        }
          
        // Creating a new person named "John Smith", who is 25 years old
        // the values below are typically derived from a database
        $person1 = new Person('John', 'Smith', 25);
		$person2 = new Person('Joe', 'Bob', 35);
        
        // Print out what the hello method returns
        echo $person1->hello(); 
		echo "<br>";
		echo $person2->hello(); 
        ?>
        </p>
    </body>
</html>