<!DOCTYPE html>
<html>
<body>

<?php
//BASIC FUNCTION
function displaytxt() {
     echo "My First Function";
}

displaytxt();

echo "<hr />";   // text underline across the screen 





//FUNCTION ARGUMENTS
function myCar($car, $color) {
    echo "$car, $color<br>";  //$car argument
}
// the value of the argument is derived when we call the function
myCar("Volvo","blue");
myCar("BMW","red");
myCar("Honda","green");

?>



</body>
</html>