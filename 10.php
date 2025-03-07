<?php

$data = [['Имя', 'Возраст'], ['Алекс', 30], ['Мария', 25]];
$filename = 'file.csv';

$handle = fopen($filename, 'w');
foreach ($data as $row) {
    fputcsv($handle, $row);
}
fclose($handle);
?>
