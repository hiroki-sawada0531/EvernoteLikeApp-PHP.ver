<?php

function getDatabaseConnection() {
    try
    {
        $database_header = new PDO('mysql:host=db:dbname=simple_memo:charset=utf8mb4','root','password');
    }
    catch (PDOException $e)
    {
        echo "DB接続に失敗しました。<br/>";
        echo $e->getMessage();
        exit;
    }
    return $database_header;
}