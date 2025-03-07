<?php

$filename = 'file.txt';
if (file_exists($filename)) {
    unlink($filename);
    echo "Файл $filename удален";
} else {
    echo 'Ошибка: файл не найден';
}
?>
