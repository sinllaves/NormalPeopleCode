<!DOCTYPE html>
<html>
<body>

<?php
function test1() {
/* Normally, when a function is completed/executed, all of its variables are 
deleted. However, sometimes we want a local variable NOT to be deleted. We need
it for a further job.

To do this, use the static keyword when you first declare the variable:

Then, each time the function is called, that variable will still have the
information it contained from the last time the function was called.

Note: The variable is still local to the function.
*/

     static $x = 10;
     echo $x;
     $x++;
}

test1();
echo "<br>";
test1();
echo "<br>";
test1();
echo "<br>";
test1();
?>  

</body>
</html>