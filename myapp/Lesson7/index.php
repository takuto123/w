<?php
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++){
        $x = $i * $j;
        echo "{$i}x{$j}={$x}";
        echo '<br/>';
    }
};

$emp = ['山田' => ['age' => '20','pref' => '東京'], 
        '田中' => ['age' => '23','pref' => '神奈川'], 
        '佐藤' => ['age' => '24','pref' => '埼玉'], 
        '鈴木' => ['age' => '25','pref' => '千葉'] 
       ];


foreach( $emp as $name => $val){
    echo  "name:". $name. "<br>";

    foreach( $val as $key => $val_2 ){
    echo $key. ":".  $val_2. "<br>";
    }
}
for( $si = 1; $si <= 50;$si++){
    if($si%3 == 0|| strstr($si,'3'))
        echo $si."<br/>";
};

$array = [];

foreach( $emp as $name => $val_2){
    
    $array[] = ["name => " .$name ."<br>","pref => " .$val_2['pref'] ."<br>"];
    
}
// print_r($array);
?>