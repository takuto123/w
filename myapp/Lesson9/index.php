<!DOCTYPE html> 
<html lang = “ja”> 
<head> 
<meta charset = “UTF-8”> 
<title>GETPOST練習</title> 
</head> 
<body> 
<h1>送信</h1> 
<form action="index.php" method="post"> 
<label>名前</label><input type="text" name="name"><br/> 
<label>年齢</label><input type="number" name="age"><br/> 
<input type="submit" value="送信"> 
</form> 
</body> 
</html> 

<?php
//名前と年齢が120歳未満は表示
if(isset($_POST['name'])&&($_POST['age'] < 120)){
    echo $_POST['name'] .'さんは';
    echo $_POST['age'] ."歳です<br>";
}else{

    //年齢が120歳以上の場合
    echo "エラー<br>";
}
var_dump($_POST['age']);
?>

<!DOCTYPE html> 
<html lang = “ja”> 
<head> 
<meta charset = “UTF-8”> 
<title>GETPOST練習</title> 
</head> 
<body> 
<h1>送信</h1> 
<form action="index.php" method="post"> 
<label>ID</label><input type="text" name="id"><br/> 
<label>パスワード</label><input type="number" name="pw"><br/> 
<input type="submit" value="送信"> 
</form> 
</body> 
</html> 

<?php
$array = ['山田' => ['ID' => 'abc','PW' => '123'],
          '佐藤' => ['ID' => 'def','PW' => '456'],
          '田中' => ['ID' => 'ghi','PW' => '789']
         ];

$id = $_POST['id'];
$pw = $_POST['pw'];

$matchhed = false;
$matchhed_name = '';
foreach($array as $name => $val){
    if(($val['ID'] === $id)&&($val['PW'] === $pw)){
        $matchhed =true;
        $matchhed_name = $name;
    }
}
if($matchhed == true){
    echo $matchhed_name;

}elseif(!($val['ID'] === $id)&&($val['PW'] === $pw)){
    echo 'エラーメッセージ';
    
}else{
    echo 'エラーメッセージ';
}
?>