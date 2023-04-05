<?php

    $dsn = 'mysql:dbname=sample;host=db';
    $user = 'phper';
    $pass = 'root';

        
    try{
        $dbh = new PDO($dsn, $user, $pass);
        
        echo '接続成功<br>';

        $sql = "SELECT first_name FROM users";
        $stmt = $dbh -> query($sql);
        $result = $stmt -> fetchAll(PDO::FETCH_COLUMN);
        print_r($result);

        $dbh = null;
        // echo '123';
        // exit;
    } catch(PDOExeption $e){
        echo '接続失敗'.$e->getMessage();
        exit();
    }

 


?>