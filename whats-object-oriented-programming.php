<!-- Below is a Person class and one instance stored in $me on line 32. 
Then the greet() method of the $me object is called and the result is echod on line 35. -->
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
    </head>
	<body>
      <p>
      <?php
        // The code below creates the class
        class Person {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            // Assigning the values
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me = new Person('boring', '12345', 12345);
        
        // Printing out, what the greet method returns
        echo $me->greet(); 
        ?>
        </p>
    </body>
</html>