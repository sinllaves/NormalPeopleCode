<!DOCTYPE html>
<html>
<body>

<?php

//SORT
$names = array("John", "Bob", "Dana", "Sue", "Ted", "Sam", "Xena", "Zara");
rsort($names);

$nlen = count($names);
for($x = 0; $x <  $nlen; $x++) {
     echo $names[$x];
     echo "<br>";
}

echo "<hr />";

//ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
$tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
krsort($tscore);

foreach($tscore as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}

?>

</body>
</html>