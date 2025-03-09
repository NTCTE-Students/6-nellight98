<?php

$filename = 'file.txt';
if (file_exists($filename)) {
    $lines = count(file($filename));
    echo "Количество строк: $lines";
} else {
    echo 'Ошибка: файл не найден';
}
?>
