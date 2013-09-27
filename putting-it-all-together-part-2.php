<!-- Add a public method to the Dog class called bark(), which returns "Woof!".
Add a public method called greet() to the Dog class. This method ought to return a nice sentence containing the $name property of the Dog, which introduces himself.
Create two instances of the Dog class and store the one with the $name "Barker" in the variable $dog1 and the other one with the $name "Amigo" in the variable $dog2.
As you might have expected, call the bark() method on $dog1 and echo the result.
The last one: Call the greet() method on $dog2 and echo the result. -->
<!DOCTYPE html>
<html>
	<head>
	  <title>Putting It All Together Part 2</title>
	</head>
	<body>
    <p>
    <?php
	   class Dog 
	   {
	   public $numLegs = 4;
	   public $age;
	   public function __construct($name)
	   {
	   $this->name = $name;
	}

	   public function bark() 
	   {
	   return "Woof, ";
	}
	   public function greet() 
	   {
	      return "Hello I'm ". $this->name . " nice to meet you!";
	}
	}
	   $dog1 = new Dog("Barker");
	   $dog2 = new Dog("Amigo");
	      echo $dog1->bark();
	      echo $dog2->greet();
	?>
    </p>
    </body>
</html>