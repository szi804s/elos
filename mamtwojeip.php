<?php
// Get the client's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Specify the log file
$logFile = 'ip_log.txt';

// Get the current timestamp
$timestamp = date('Y-m-d H:i:s');

// Create the log entry
$logEntry = "IP: $ip - Time: $timestamp\n";

// Append the log entry to the log file
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
?>
