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
<title>確認画面からデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./web.css">
</head>
<body>
<h1>確認画面</h1>
<form action = "web3.php" method = "post">

<?php
 $faname = $_POST["familyname"];
 $finame = $_POST["firstname"];
 $sex = $_POST["sex"];
 $address = $_POST["address"];
 $tel1 = $_POST["tel1"];
 $tel2 = $_POST["tel2"];
 $tel3 = $_POST["tel3"];
 $mail1 = $_POST["mail1"];
 $mail2 = $_POST["mail2"];
 $where = $_POST["where"];
 $category = $_POST["category"];
 $question = $_POST["質問内容"];

 echo "名前は".$faname." ".$finame."です<br>";
 echo "性別は".$sex."です<br>";
 echo "住所は".$address."です<br>";
 echo "電話番号は".$tel1."-".$tel2."-".$tel3."です<br>";
 echo "メールアドレスは".$mail1."@".$mail2."です<br>";
 echo $where."で知りました<br>";
 echo "質問のカテゴリについては".$category."です<br>";
 echo "質問内容<br>".$question."<br>"."です<br>";
 ?>

 <input type="button" value="戻る" onclick="history.back()"><br>
 <input type = "submit" value = "送信"><br>
 <a href="web.php">未入力状態で前の画面に戻る</a><br>

 </html>
 </body>
 </form>
