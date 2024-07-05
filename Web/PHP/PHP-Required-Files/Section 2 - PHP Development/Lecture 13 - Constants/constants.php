<!DOCTYPE html>
<html>
<body>

<?php
// an identifier for a given value. cant be changed during the script like a variable
// Case-Sensitive, start with the name, value

define("WELCOME", "Hello my name is John Smith");
echo WELCOME;

echo "<hr />";
// Case-Insensitive
define("WELCOME2", "Hello my name is John Smith", true);
echo welcome2;

echo "<hr />";
// Constants are Global CROSS THE WHOE SCRIPT


define("CAR", "VOLVO");

function mycar() {
    echo CAR;
}
 
mycar();

?>  

</body>
</html>