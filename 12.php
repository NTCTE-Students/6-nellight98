<?php

$logfile = 'log.txt';
$message = 'log';

file_put_contents($logfile, date('Y-m-d H:i:s') . ": $message\n", FILE_APPEND);
?>