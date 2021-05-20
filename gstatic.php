<!DOCTYPE html>
<html>
<body>
<?php
function test1()
{
	static $x=10; //if not static then every time we will get the value as 10
	echo $x ;
	$x++;
}
test1();
echo "<br />";
test1();
echo "<br />";
test1();
echo "<br />";
test1();
?>
</body>
</html>

	