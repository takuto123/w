<?php
// //問１
$reques = "../sample.json";
$json = file_get_contents($reques);
$arr = json_decode($json,true);


foreach($arr[0] as $data => $val){
   
    echo "$data".':'. $val['name']. "<br>";
    
    
}
//  var_dump($data) キー名

//問 2
$array = [];

foreach($arr[0] as $ba => $bi){
    $key = $bi['name'];//県名
    $array[$key]= [];

    foreach($bi['city'] as $city){
        $array[$key][]= $city['city'];
    }
}

foreach($array as $key => $va){
    echo $key. ' => ['. implode(',',$va). "]<br>";
    // var_dump($va);
}
echo "<br>";

//問３

$arr[0][1]['region'] = '北海道地方';
//josnファイルの[0][1]に北海道地方を追加
for($i = 2;$i<8;$i++){
    $arr[0][$i]['region'] = '東北地方';
}
for($i = 8;$i<15;$i++){
    $arr[0][$i]['region'] = '関東地方';
}
for($i = 15;$i<24;$i++){
    $arr[0][$i]['region'] = '関西地方';
}
for($i = 24;$i<31;$i++){
    $arr[0][$i]['region'] = '中部地方';
}
for($i = 31;$i<36;$i++){
    $arr[0][$i]['region'] = '中国地方';
}
for($i = 36;$i<40;$i++){
    $arr[0][$i]['region'] = '四国地方';
}
for($i = 40;$i<48;$i++){
    $arr[0][$i]['region'] = '九州地方・沖縄地方';
}
foreach($arr[0] as $key2 => $val2){
    foreach($val2['city'] as $val3){
        var_dump($val2['region']."=> [ <br> 県名 => [".$val2['name']."] <br> 市町村名 => [".$val3['city']."] <br>");
    }
}
//$val2['region']に地方名
//$val2['name']に県名
//$val3['city']に地方名
// var_dump($arr);





 
?>