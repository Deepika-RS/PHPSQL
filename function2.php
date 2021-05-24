<!DOCTYPE html>
<html>
<body>
<?php

// DEFAULT ARGUMENT VALUE
function Myage($minage=20)
{
	echo "my age is $minage <br />";
}
Myage();
Myage(45);
Myage(45.5);

echo"<hr />";


//Function returning the values

function add($x,$y)
{
	$z=$x+$y;
	return $z;
}
echo"addition of 3 and 5 is ".add(3,5)."<br />";
echo"addition of 4.5 and 7 is ".add(4.5,7)."<br />";
?>
</body>
</html>


	