<?php
$str = $_GET['message'];
function h($str){
    return htmlspecialchars($str,ENT_QUOTES,"UTF-8");

};
print_r(h($str));


// サイトへのログイン時など、ユーザIDやパスワードなど人に見られては困る情報を送信するにはPOST送信がいい
//ENT_QUOTESの意味は シングルクオートとダブルクオートを共に変換する
//UTF-8の意味は ASCII 互換のマルチバイト ８ビット Unicode
// ASCII(アスキー)とは 英語のアルファベットの大文字小文字や数字の印刷可能な構成に加えて
// CR＋LF(改行に使われる),HT(水平タブ)といった印刷不可な制御文字で構成されている文字コード

//exitはそこまでのソースコードの処理を止める
//php exit デバック しらべる
//関数の受け渡し 勉強
//h関数について確認と勉強をする
?>

<!DOCTYPE html>
<html lang = "ja">
<head><meta charset = "UTF-8"></head>
<body>
<form action = "index.php" method = "get">
<input type = "text" name ="message"><br/>
<input type="checkbox" name="hoby[]" value="musicappreciation">音楽鑑賞<br/>
<input type="checkbox" name="hoby[]" value="moviegoing">映画鑑賞<br/>
<input type="checkbox" name="hoby[]" value="reading">読書<br/>
<input type="checkbox" name="hoby[]" value="fishing">釣<br/>
<input type = "submit" value ="submit"><br/>
</form>
</body>
</html>