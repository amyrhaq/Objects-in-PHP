<!-- Add the php tag.
Create a Dog class.
Add a public property called $numLegs, which stores the value 4 to the Dog class.
Add another public property called $name, which doesn't contain a value.
Add the __construct()or method, which accepts $name as a parameter.
In this __construct()or method, add some code, so $this->name contains $name. -->
<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
	</head>
	<body>
      <p>
    <?php
    class Dog
    {
        public $numLegs = 4;
        public $name;
        public function __construct($name)
        {
            $this->name=$name;
        }

        public function bark()
        {
            return "Woof!";

        }
        public function greet()
        {
            "Hello, my name is " . $this->$name . "."
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