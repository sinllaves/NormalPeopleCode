<!DOCTYPE html>
<html>
<body>

<?php

//GLOBAL SCOPE EXAMPLE

$x = 5; // global scope variable is declared outside of function
  
function test1() {
     // Will Generate Error, no X variable is declared inside the function
     
     echo "<p>Value of x is: $x</p>";
} 


test1();

echo "<p>Value of x is: $x</p><hr />"; // will pass because of global variable






//LOCAL SCOPE EXAMPLE

function test2() {
    $y = 5; // local scope
    echo "<p>Value of y is: $y</p>";  // will pass because of local variable
} 
test2();

	// Will Generate Error, there is no Y global
	echo "<p>Value of y is: $y</p>";
?>

</body>
</html>