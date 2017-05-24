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
<title>フォームからデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./web.css">
</head>
<body>
<h1>お問い合わせ画面</h1>
<form action = "web2.php" method = "post">
    <ul>
        <li class="faname">
            <label for="faname">姓(必須)</label>
            <input type = "text" name = "familyname"
            placeholder="family name" required/><br/>
        </li>
    </ul>
    <ul>
        <li class="finame">
            <label for="finame">名(必須)</label>
            <input type = "text" name = "firstname"
            placeholder ="first name" required/><br/>
        </li>
    </ul>
    <ul>
        <li class="sex">
            <label for="sex">性別</label>
            <input name = "sex" type = "radio" id="s1" value = "男"/>
            <label for="s1">男</label>
            <input name = "sex" type = "radio" id="s2" value = "女"/>
            <label for="s2">女</label>
            <input name = "sex" type = "radio" label="s3" value = "不明"/>
            <label for="s3">不明</label></br>
        </li>
    </ul>
    <ul>
        <li class="adress">
            <label for="adress">住所</label>
            <input type = "text" name = "address" placeholder="address"><br/>
        </li>
    </ul>
    <ul>
        <li class="tell">
            <label for="tell">電話番号(必須)</label>
            <input type = "tel" name = "tel1" maxlength="4" required>
            -
            <input type = "tel" name = "tel2" maxlength="4" required>
            -
            <input type = "tel" name = "tel3" maxlength="4" required>
        </li>
    </ul>
    <ul>
        <li class="mail">
            <label for="mail">メールアドレス(必須)</label>
            <input type = "text" name = "mail1" placeholder="e-mail address" required>
            @
            <input type = "text" name = "mail2" required>
        </li>
    </ul>
    <ul>
        <li class="where">
            <label for="where">どこで知ったか</label>
            <input name = "where" type = "checkbox" id="s3" value="magazine"/>
            <label for="s3">雑誌</label>
            <input name = "where" type = "checkbox" id="s4" value="newspaper"/>
            <label for="s4">新聞</label>
        </li>
    </ul>
    <p>
        お問い合わせカテゴリ
        <select name="質問カテゴリー">
            <option value="商品">商品について</option>
            <option value="その他" selected>その他</option>
        </select>
    </p>
    <p>
        お問い合わせ内容
        <input name = "question" type = "text">
        <br/>
    </p>

<div class="button">
    <input name="reset" type="reset" value="リセット" /><br>
    <input type = "submit" value = "確認"><br>
</div>
</html>
</body>
</form>
