<?php
$num = mt_rand(1, 10);
 
if ($num % 2 === 0) {
// 入力値が偶数ならば
    echo  '偶数';
} else {
// 入力値が奇数ならば
    echo  '奇数';
}

$sum = rand(0,100);

echo nl2br("\n");
// 入力値が49点以下は不可と表示
if ($sum >= 0 && $sum <= 49){
    echo '不可';

// 入力値が50~69点ならば可と表示
} 
else if ($sum >= 50 && $sum <= 69){
    echo '可';
    
// 入力値が70~79点ならば良と表示
} 
else if ($sum >= 70 && $sum <= 79){
    echo '良';

// 入力値が80~99点ならば優と表示
} 
else if ($sum >= 80 && $sum <= 99){
    echo '優';

// 入力値が100点ならば満点と表示
} 
else if ($sum == 100){
    echo '満点';
}

$sam = mt_rand(0,100);
$san = mt_rand(0,100);

echo nl2br("\n");

//両方とも60点以上の場合 合格と表示
if ($sam >= 60 && $san >=60 ){
   echo "合格";

   //合計が130点以上の場合 合格と表示
}
elseif ($sam + $san >= 130){
   echo "合格";

   //合計が100点以上かつ どちらかのテストが90点以上であれば 合格と表示
}
elseif(($sam + $san) >= 100 && $sam >= 90){
    echo "合格";
}elseif(($sam + $san) >= 100 && $san >=90){
    echo "合格";
}
else{

 // 上記以外全て 不合格と表示
    echo '不合格';
}

?>