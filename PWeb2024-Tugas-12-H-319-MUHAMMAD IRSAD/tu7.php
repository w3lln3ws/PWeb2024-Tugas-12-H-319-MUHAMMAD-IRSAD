<?php
$assoc_array = array("a" => 3, "b" => 1, "c" => 2);

asort($assoc_array);
echo "Ascending: <pre>";
print_r($assoc_array);
echo "</pre>";

arsort($assoc_array);
echo "Descending: <pre>";
print_r($assoc_array);
echo "</pre>";
?>
