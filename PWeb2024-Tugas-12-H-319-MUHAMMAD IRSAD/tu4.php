<?php
$assoc_array = array("nama" => "Budi", "umur" => 25, "pekerjaan" => "Programmer");

echo "Menggunakan FOREACH:<br>";
foreach($assoc_array as $key => $value) {
    echo "$key: $value<br>";
}

echo "Menggunakan WHILE-FOREACH:<br>";
foreach ($assoc_array as $key => $value) {
    echo "$key: $value<br>";
}
?>

