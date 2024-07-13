<?php
$array = array(1, 2, 3, 4, 5);

echo "Current: " . current($array) . "<br>";
next($array);
echo "Next: " . current($array) . "<br>";
prev($array);
echo "Previous: " . current($array) . "<br>";
end($array);
echo "End: " . current($array) . "<br>";
?>
