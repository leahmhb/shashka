<?php
    $dsn = 'mysql:host=localhost; dbname=horse-racing';
    $username = 'shashka';
    $password = '';
    try
    {
        $db = new PDO($dsn, $username, $password);
    } catch (Exception $e) {
        echo('Connection failed.');
        exit();
    }
?>