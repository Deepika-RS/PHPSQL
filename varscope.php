<!DOCTYPE html>
<html>
<body>
<?php
//GLOBAL SCOPE EXAMPLE
$x=5;
function test1() {
	// generate error
	echo "<p> the value of x is $x</p>";
}
test1();
echo "<p> the value of x is $x</p>";

//LOCAL SCOPE OF VARIABLE

function test2() {
	// local var
	$y=10;
	echo "<p> the value of y is $y</p>";
}
test2();
echo "<p> the value of y is $y</p>";
?>
</body>
</html>


	