<?php
if (isset($_POST['function_name'])) {
    $function_name = $_POST['function_name'];
    if (function_exists($function_name)) {
        echo "Fungsi '$function_name' tersedia di PHP.";
    } else {
        echo "Fungsi '$function_name' tidak tersedia di PHP.";
    }
}
?>
