<!DOCTYPE html>
<html>
<head>
   <title> Introduction to OOC</title>
  </head> 
<body>
<?php
// create a class

class Person {
	public $name;
	public $age;
	
	public function __construct($name,$age) {
		$this->name = $name;
		$this->age = $age;
	}
	public function hello()
	{
		echo "My name is ",$this->name ," and my age is ",$this->age ;
		echo "<br />";
	}
}
$person1=new person('ram',25);
$person2=new person('shyam',29);

echo $person1->hello();
echo "<br />";
echo $person2->hello();
?>
</body>
</html>
