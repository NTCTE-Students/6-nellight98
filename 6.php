<?php

$src = 'source.txt';
$dst = 'destination.txt';

if (file_exists($dst)) {
    echo 'Предупреждение: файл назначения уже существует';
} else {
    copy($src, $dst);
}
?>
