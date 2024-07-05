<!DOCTYPE html>
<html>
<body>

<?php
//BASIC OUTPUT USING ECHO, its faster
echo "<h1>Test Header</h1>";
echo "Sample Paragraph 1. <br>";
//Echo allows multiple parameters - Print Does not
echo "This ", "string ", "has ", "multiple parameters ";
echo "<hr />";

//OUTPUT VARIABLES ECHO
$txt1 = "Sample Text 1";
$txt2 = "Soccer";
$x = 20;
$y = 30;

echo "<h2>" . $txt1 . "</h2>";
echo "I like " . $txt2 . "<br>";
echo $x + $y;

//BASIC OUTPUT USING PRINT
print "<h1>Test Header</h1>";
print "Sample Paragraph 1. <br>";
print "<hr />";

//OUTPUT VARIABLES PRINT
$txt1 = "Sample Text 1";
$txt2 = "Soccer";
$x = 20;
$y = 30;

print "<h2>" . $txt1 . "</h2>";
print "I like " . $txt2 . "<br>";
print $x + $y;


?>  

</body>
</html>