<?php

    $dsn = 'mysql:dbname=sample;host=db';
    $user = 'phper';
    $pass = 'root';

        
    try{
        $dbh = new PDO($dsn, $user, $pass);
        
        // echo '接続成功<br>';

        // 1,SQLの準備
        $sql = "SELECT * FROM users";//useテーブル全て表示
        // 2,SQLの実行
        $stmt = $dbh -> query($sql);
        // 3,SQLの結果を受け取る
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        print_r($result);

        $dbh = null;
        // echo '123';
        // exit;
    } catch(PDOExeption $e){
        echo '接続失敗'.$e->getMessage();
        exit();
    }

    
    function dbConnect(){
        $dsn = 'mysql:dbname=sample;host=db';
        $user = 'phper';
        $pass = 'root';
        try{
            $dbh = new PDO($dsn, $user, $pass);
            echo '接続成功';
            $dbh = null;
        } catch(PDOExeption $e){
                echo '接続失敗'.$e->getMessage();
                exit();
        }
    };
    $deta = dbConnect();
    echo $data;


    

 


?>