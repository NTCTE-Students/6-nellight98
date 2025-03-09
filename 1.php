<?php

$filename = 'file.txt';
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo $content;
} else {
    echo 'Ошибка: файл не найден';
}
?>
