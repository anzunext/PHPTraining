<?php
if(isset($_POST['comment']) == true){
    $comment = $_POST['comment'];
    echo $comment;
}
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UTF-8">
<title>完了画面からデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./web.css">
</head>
<body>
<h1>完了画面</h1>
<form action = "web3.php" method = "post">

<?php
$fp = fopen ( "count.txt" , "r+" );//ファイルを開く
$count = trim(fgets ( $fp , 10 ));//9桁分値読み取り
$count ++;//値＋1（カウントアップ）
rewind ( $fp );//ファイルポインタを先頭に戻す
fputs ( $fp , $count );//値書き込み
fclose ( $fp );//ファイル閉じる
echo "お問い合わせ番号".$count."<br>";

echo "手続きは終了です。";
?>

 </html>
 </body>
 </form>
