<?php
if(isset($_POST['comment']) == true){
    $comment = $_POST['comment'];
    echo $comment;
}
$errors = array();
if(isset($_POST['submit']) && $_POST['submit'] == "送信"){
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    if($mail == ""){
        $errors['mail'] = "メールアドレスが入力されていません。";
    }
    if($mail == ""){
        $errors['mail'] = ""
    }
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UTF-8">
<title>フォームからデータを受け取る</title>
</head>
<body>
<h1>お問い合わせ</h1>
<form action = "web2.php" method = "post">
    <p>
        姓
        <input type = "text" name = "familyname"/><br/>
    </p>
    <p>
        名前
        <input type = "text" name = "firstname"/><br/>
    </p>
    <p>
        性別
        <input name = "sex" type = "radio" value = "男"/>男
        <input name = "sex" type = "radio" value = "女"/>女
        <input name = "sex" type = "radio" value = "不明"/>不明
    </p>
    <p>
        住所
        <input type = "text" name = "address"><br/>
    </p>

    <p>
        電話番号
        <input type = "tel" name = "tell1" size="4" maxlength="4">
        -
        <input type = "tel" name = "tell2" size="4" maxlength="4">
        -
        <input type = "tel" name = "tell3" size="4" maxlength="4">
    </p>
    <p>
        メールアドレス
        <input type = "text" name = "mail1">
        @
        <input type = "text" name = "mail2">
    </p>
    <p>
        どこで知ったか
        <input name = "where" type = "checkbox" value="magazine"/>
        雑誌
        <input name = "where" type = "checkbox" value="newspaper"/>
        新聞
    </p>
    <p>
        質問カテゴリ
        <input name = "category" type = "text">
    </p>
    <p>
        質問内容
        <textarea name="question" cors="*" rows="*"></textarea><br/>
    </p>


    <input name="reset" type="reset" value="リセット" />
    <input type = "submit" value = "送信">
</html>
</body>
</form>
