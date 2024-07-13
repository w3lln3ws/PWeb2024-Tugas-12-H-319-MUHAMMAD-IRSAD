<?php
function increment($value) {
    $value++;
    echo "Nilai dalam fungsi: $value<br>";
}

$num = 5;
increment($num);
echo "Nilai luar fungsi: $num";
?>
