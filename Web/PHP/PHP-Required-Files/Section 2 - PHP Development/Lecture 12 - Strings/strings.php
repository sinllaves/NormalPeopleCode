<!DOCTYPE html>
<html>
<body>

<?php

//WORD COUNT
echo str_word_count("Hello world!");
echo "<hr />";

//REVERSE WORDS
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<hr />";

//SEARCH FOR TEXT INSIDE A STRING
echo strpos("Hello world!", "world"); // outputs 6
echo "<hr />";

//REPLACE TEXT INSIDE A STRING
echo str_replace("world", "John", "Hello world!"); // outputs Hello John!
echo "<hr />";

?>  
  
</body>
</html>