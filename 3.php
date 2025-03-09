<?php

$filename = 'file.txt';
file_put_contents($filename, "\nНовая строка", FILE_APPEND | LOCK_EX); 
?>
