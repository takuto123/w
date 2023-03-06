<?php


function calc_tax($price){
    
    //引数が数値かどうかチェック
    if(is_numeric($price)){
    
        //税込価格を定義
        $tax = $price + ($price * 0.10);
   
        //返り値
        return $tax;
    
    }else{
        //数値以外のものはエラーメッセージと標示
        return 'エラーメッセージ';
           
  }
} 

$price = calc_tax(100);
echo $price;
echo "<br>";

function emptys($var){
    
    //引数の変数が空かどうかチェック
    if(empty($var)){
        return 'OK';
    }else{
        return 'NG';
    }
}
//変数が空の場合
$var = emptys("");

//変数が空では無い場合
$var_2 = emptys(1);


echo $var;
echo "<br>";
echo $var_2;
echo "<br>";



function empty_1($array){
    if(empty($array)){
      
    //配列が空の場合OK
        return 'OK';
    }else{

    //配列が空では無い場合NG    
        return 'NG';
    }
}
//配列が空の場合
$array = empty_1(0);

//配列が合う場合
$array2 = empty_1(array("0"));

echo $array;
echo "<br>";
echo $array2;
echo "<br>";

?>