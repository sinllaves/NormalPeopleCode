<!DOCTYPE html>
<html>
<body>

<?php

//INDEXED ARRAY 
$colors = array("Blue", "Green", "Red"); 
echo "My Favorite Colors are: " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . "<hr />";

//ARRAY LENGTH
echo count($colors) . "<hr />";

//LOOP THROUGH AN INDEXED ARRAY
$arrlength = count($colors);

for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x] . "<br />";

}

echo "<hr />";

//ASSOCIATIVE ARRAYS
$tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
echo "Bill scored " . $tscore['Bill'] . " /100.";

echo "<hr />";

//LOOP THROUGH AN ASSOCIATIVE ARRAY
foreach($tscore as $x => $score) {
    echo "Key=" . $x . ", Score=" . $score;
    echo "<br>";
}

?>

</body>
</html>