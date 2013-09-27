<!-- The public properties $firstname, $lastname and $age should get a value via a constructor.
Change the code, so $teacher's:
$firstname is "boring",
$lastname is "12345",
$age is 12345
Add your $firstname, $lastname and $age to $student.
echo the $age of $student. -->
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
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
            }
        }

            $teacher = new Person("boring","12345",12345);
            $student = new Person("first","last", 23);
            echo $teacher->isAlive;
            echo $student->age;
        ?>
    </body>
</html>