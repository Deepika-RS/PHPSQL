<!DOCTYPE html>
<html>
<body>
<?php
$x=10;
$y=20;
 function test1() {
	 /*global $x,$y;
	 echo $x+$y;
	 echo "<br />";*/
	 $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
 }
 test1();
 echo "value of x and y are " .$x. " & " .$y. " ! <br />";
 ?>
 </body>
 </html>
 
	 