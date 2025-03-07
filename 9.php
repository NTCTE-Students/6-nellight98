<?php

$filename = 'file.csv';
if (($handle = fopen($filename, 'r')) !== FALSE) {
    echo '<table border="1">';
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
        echo '<tr>';
        foreach ($data as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    fclose($handle);
} else {
    echo 'Ошибка: файл не найден';
}
?>
