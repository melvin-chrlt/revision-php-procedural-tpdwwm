<?php

try {
    $sqlViewTransports = 'SELECT * FROM lignes';
    $dbViewTransports = $db->query($sqlViewTransports);
    $transports = $dbViewTransports->fetchAll();
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}