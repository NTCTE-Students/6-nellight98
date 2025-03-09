<?php

$search = 'привет';
$replacement = 'пока';
$filename = 'file.txt';

$content = file_get_contents($filename);
$content = str_replace($search, $replacement, $content);
file_put_contents('new_file.txt', $content);
?>
