<!-- Add a method called greet() to your class. This method ought to return: 
"Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)" .
Call this new greet() method on $teacher and $student and echo the result to the page. -->
<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <?php
         class Person 
        {
           public $isAlive = true; 
           public $firstname;
           public $lastname;
           public $age;
           public  function __construct($firstname, $lastname, $age)
           {
               $this->firstname  = $firstname;
               $this->lastname = $lastname;
               $this->age = $age;
       	   }

	       public function greet () 
	       {
	           return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
	       }
   		}
			   $teacher = new Person("boring", "12345", 12345);
			   $student = new Person("Amyr", "Haq", 23);

			   echo $student->greet();
   		?>
    </body>
</html>