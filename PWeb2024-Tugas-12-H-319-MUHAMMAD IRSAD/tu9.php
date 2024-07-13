<?php
$array = array(1, 2, 3, 4, 5);

$search = 3;
$key = array_search($search, $array);

if ($key !== false) {
    echo "Elemen ditemukan pada indeks: $key";
} else {
    echo "Elemen tidak ditemukan";
}
?>
