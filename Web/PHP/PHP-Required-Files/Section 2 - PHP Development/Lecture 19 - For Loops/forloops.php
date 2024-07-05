<!DOCTYPE html>
<html>
<body>

<?php 

//FOR LOOP
for ($x = 0; $x <= 10; $x++) {
   echo "$x <br>";
}

echo "<hr />";



//FOR EACH LOOP
$cars = array("volvo", "bmw", "honda", "ford"); 

foreach ($cars as $value) {
   echo "$value <br>";
}

?>   

</body>
</html>