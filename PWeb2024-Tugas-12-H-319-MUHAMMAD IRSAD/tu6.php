<?php
$array = array(5, 3, 8, 1, 2);

sort($array);
echo "Ascending: <pre>";
print_r($array);
echo "</pre>";

rsort($array);
echo "Descending: <pre>";
print_r($array);
echo "</pre>";
?>
