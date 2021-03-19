<?php

/**
 * PDOを使ってデータベースに接続する
 * @return PDO
 */
function getDatabaseConnection() {
    try
    {
        $database_handler = new PDO('mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_af234e995b33850;charset=utf8mb4', 'b3ac61fdbd174d', '908281b9');
    }
    catch (PDOException $e)
    {
        echo "DB接続に失敗しました。<br />";
        echo $e->getMessage();
        exit;
    }
    return $database_handler;
}