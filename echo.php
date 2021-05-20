<!DOCTYPE html>
<html>
<body>
<?php
echo "<h1> Test Header</h1>";
echo "sample paragraph<br />";
echo "This forms "," a sentences "," <br />";
echo "<hr />";

$text= "Sample text";
$x=10;

echo "I like ". $text. " always!";
echo $x;
echo "<hr />";

print "I like ". $text. " always!";
print $x;
print "<hr />";

print "<h1> Test Header</h1>";
print "sample paragraph<br />";
//print "This forms","a sentences","<br />"; will give error in print but no error in echo echo allows multiple parameter but not print 