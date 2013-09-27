<!-- Create a class called Cat.
Add two public properties to this class: $isAlive ought to store the value true and $numLegsshould contain the value 4.
Add a public $name property, which gets its value via the __construct()or.
Add a public method called meow(), which returns "Meow meow".
Create an instance of the Cat class, which has the $name "CodeCat".
Call the meow() method on this Cat and echo the result. -->
<html>
    <head>
	  <title> Challenge Time! </title>
	</head>
	<body>
      <p>
        <?php
            class Cat 
            {
				public $isAlive = true;
				public $numLegs = 4;
				public $name;
				public function __construct($name)
			{
				$this->name = $name;
			}
				public function meow()
			{
				return "Meow meow";
			}
			}
				$cat1 = new Cat("CodeCat");
				echo $cat1->meow();
        ?>
      </p>
    </body>
</html>