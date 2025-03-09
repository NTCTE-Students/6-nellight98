<?php

$src_folder = '1.6'; // Укажите исходную папку
$backup_folder = 'backup' . date('Y-m-d');
mkdir($backup_folder, 0777, true);

foreach (scandir($src_folder) as $file) {
    if ($file !== '.' && $file !== '..') {
        copy("$src_folder/$file", "$backup_folder/$file");
    }
}
?>
