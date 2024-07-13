<?php
$array = array(1, 2, 3, 4, 5);

echo "Menggunakan FOR:<br>";
for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

echo "Menggunakan FOREACH:<br>";
foreach($array as $value) {
    echo $value . "<br>";
}
?>
