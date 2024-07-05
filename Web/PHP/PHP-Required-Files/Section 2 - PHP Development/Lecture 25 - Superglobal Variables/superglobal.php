<!DOCTYPE html>
<html>
<body>

<?php

//GLOBAL VARIABLE
$x = 30; 
$y = 40;
 
function add() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
add(); 
echo $z; 

//OTHER SUPERGLOBALS
echo "<hr />";
 
echo $_SERVER['PHP_SELF'];
echo "<hr />";
echo $_SERVER['SERVER_NAME'];
echo "<hr />";

?>

</body>
</html>