<!DOCTYPE html>
<html>
<body>
<?php

//case sensitive constants
define("WELCOME","hai my name is jhony");
echo WELCOME;
echo "<hr />";

//case insensitive constants
define("Welcome2"  , "hai my name is jhony2", true);
echo welcome2;
echo "<hr />";

//constants are global
define("car","volvo");
function hello(){
	echo car;
}
hello();
?>
</body>
</html>
