<?php

$old_name = 'destination.txt';
$new_name = 'file.txt';

if (file_exists($new_name)) {
    echo 'Ошибка: файл с новым именем уже существует';
} else {
    rename($old_name, $new_name);
}
?>
