<?php

function getFiles($directory = 'inter')
{
    $files = array();
    $dirScan = scandir($directory);
    foreach ($dirScan as $value) {
        if (is_file($directory . '/' . $value)) {
            $files[$value] = $directory . '/' . $value;
        }
    }
    return $files;
}

function bdd($dbInfos = null)
{
    if (NULL === $dbInfos) {
        include 'connect.inc.php';
    }
    $dsn = "mysql:host={$dbInfos['host']}; dbname={$dbInfos['dbName']}; charset=UTF8";
    $db = new PDO($dsn, $dbInfos['userName'], $dbInfos['userPass']);
    return $db;
}