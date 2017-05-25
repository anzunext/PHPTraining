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
 $question = $_POST["お問い合わせ内容"];

 echo "名前は".$faname." ".$finame."です<br>";
 echo "性別は".$sex."です<br>";
 echo "住所は".$address."です<br>";
 echo "電話番号は".$tel1."-".$tel2."-".$tel3."です<br>";
 echo "メールアドレスは".$mail1."@".$mail2."です<br>";
 echo $where[0]." ".$where[1]."で知りました<br>";
 echo "質問のカテゴリについては".$category."です<br>";
 echo "お問い合わせ内容<br>".$question."<br>"."です<br>";

 echo "<form action=\"web4.php\" method=\"post\">";
 echo "<input type=\"hidden\" name=\"faname\" value=".$faname.">";
 echo "<input type=\"hidden\" name=\"finame\" value=".$finame.">";
 echo "<input type=\"hidden\" name=\"sex\" value=".$sex.">";
 echo "<input type=\"hidden\" name=\"address\" value=".$address.">";
 echo "<input type=\"hidden\" name=\"tel1\" value=".$tel1.">";
 echo "<input type=\"hidden\" name=\"tel2\" value=".$tel2.">";
 echo "<input type=\"hidden\" name=\"tel3\" value=".$tel3.">";
 echo "<input type=\"hidden\" name=\"mail1\" value=".$mail1.">";
 echo "<input type=\"hidden\" name=\"mail2\" value=".$mail2.">";
 echo "<input type=\"hidden\" name=\"where\" value=".$where[0].$where[1].">";
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
