<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UTF-8">
<title>確認画面からデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./web.css">
</head>
<body>
<h1>確認画面</h1>

<?php

$fp = fopen ( "count.txt" , "r+" );//ファイルを開く
$count = trim(fgets ( $fp , 10 ));//9桁分値読み取り
$count ++;//値＋1（カウントアップ）
rewind ( $fp );//ファイルポインタを先頭に戻す
fputs ( $fp , $count );//値書き込み
fclose ( $fp );//ファイル閉じる
//echo "お問い合わせ番号".$count."<br>";

$faname = $_POST["familyname"];
$finame = $_POST["firstname"];
$sex = $_POST["sex"];
$address = $_POST["address"];
$tel1 = $_POST["tel1"];
$tel2 = $_POST["tel2"];
$tel3 = $_POST["tel3"];
$mail1 = $_POST["mail1"];
$mail2 = $_POST["mail2"];

$category = $_POST["category"];
$question = $_POST["question"];


echo "名前は".$faname." ".$finame."です<br>";
echo "性別は".$sex."です<br>";
echo "住所は".$address."です<br>";
echo "電話番号は".$tel1."-".$tel2."-".$tel3."です<br>";
echo "メールアドレスは".$mail1."@".$mail2."です<br>";
if(isset($_POST["where"])){
    foreach($_POST["where"] as $e){
        $where[] = $_POST["where"];
        echo $e . " ";
    }
    echo "<br>";
}
else{
    $_POST['where'][0] = "入力されていません。";
    echo $_POST['where'][0] . "<br>";
}
echo "質問のカテゴリについては".$category."です<br>";
echo "お問い合わせ内容<br>".$question."<br>"."です<br>";

echo "<form action=\"web4.php\" method=\"post\">";
echo "<input type=\"hidden\" name=\"count\" value=".$count.">";
echo "<input type=\"hidden\" name=\"faname\" value=".$faname.">";
echo "<input type=\"hidden\" name=\"finame\" value=".$finame.">";
echo "<input type=\"hidden\" name=\"sex\" value=".$sex.">";
echo "<input type=\"hidden\" name=\"address\" value=".$address.">";
echo "<input type=\"hidden\" name=\"tel1\" value=".$tel1.">";
echo "<input type=\"hidden\" name=\"tel2\" value=".$tel2.">";
echo "<input type=\"hidden\" name=\"tel3\" value=".$tel3.">";
echo "<input type=\"hidden\" name=\"mail1\" value=".$mail1.">";
echo "<input type=\"hidden\" name=\"mail2\" value=".$mail2.">";

var_dump(isset($where[1]));
var_dump($_POST['where'][0]);
var_dump($_POST['where'][1]);

if (isset($where[0],$where[1])) {
    echo "<input type=\"hidden\" name=\"where\" value=" . $_POST['where'][0],$_POST['where'][1] . ">";
}
    elseif(isset($where[0])){
        echo "<input type=\"hidden\" name=\"where\" value=" . $_POST['where'][0].">";
        /*$where[0] . " " . $where[1].">";*/
        // . $_POST['where'][0] . " "
    }
    elseif (isset($where[1])) {
        echo "<input type=\"hidden\" name=\"where\" value=" . $_POST['where'][1].">";
    }
    else{
        $_POST['where'][0]="入力されていません";
        echo "<input type=\"hidden\" name=\"where\" value="
        . $_POST['where'][0].">";
    }

echo "<input type=\"hidden\" name=\"category\" value=".$category.">";
echo "<input type=\"hidden\" name=\"question\" value=".$question.">";

?>

<input type="button" value="戻る" onclick="history.back()"><br>
<input type = "submit" name="送信" value = "送信">
</form>
<br>
<a href="web.php">未入力状態で前の画面に戻る</a><br>

</html>
</body>
</form>
