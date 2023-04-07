<?php

    $dsn = 'mysql:dbname=sample;host=db';
    $user = 'phper';
    $pass = 'root';

        
    try{
        $dbh = new PDO($dsn, $user, $pass);
        
        echo '接続成功<br>';

        // $sql = "SELECT first_name FROM users";苗字のみ表示の場合

        $sql = "SELECT * FROM users";//useテーブル全て表示
        $stmt = $dbh -> query($sql);
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        print_r($result);

        $dbh = null;
        // echo '123';
        // exit;
    } catch(PDOExeption $e){
        echo '接続失敗'.$e->getMessage();
        exit();
    }

 


?>