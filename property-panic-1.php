<!-- Add a public $isAlive property to the Person class and assign the value true to $isAlive.
Add three further public properties to thePerson class: $firstname, $lastname and $age. 
Don't assign any values to these.
Echo the value of the $isAlive property of your $teacher object. -->

<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <?php
        class Person {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
        }
        $teacher = new Person();
        $student = new Person();
        
        echo $teacher -> $isAlive;
        ?>
    </body>
</html>