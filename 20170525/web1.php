<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UTF-8">
<title>フォームからデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./style1.css">
</head>
<body>
<h1>お問い合わせ画面</h1>
<table>
<div class="main">
<form action = "web2.php" method = "post">
    <div class="oya">
        <div class="left">姓*</div>
        <div class="right"><input id="faname" type="text" name="familyname" placeholder="山田" required></div>
    </div>

    <div class="oya">
        <div class="left">名*</div>
        <div class="right"><input type="text" name="firstname" placeholder="太郎" required/><br/></div>
    </div>

    <div class="oya">
        <div class="left1">性別</div>
        <label class="oya3_2"><input name="sex" type="radio" id="s1" value="男"/>男</label>
        <label class="oya3_3"><input name="sex" type="radio" id="s2" value="女"/>女</label>
        <label class="oya3_4"><input name="sex" type="radio" id="s3" value="不明"/>不明</label>
    </div>

    <div class="oya">
        <div class="left">住所</div>
            <div class="right"><input type="text" name="address" placeholder="ところ"><br/></div>
    </div>

    <div class="oya">
        <div class="left">電話番号*</div>
        <div class="oya5_2"><input type="tel" name="tel1" maxlength="4" size="2" placeholder=123 required></div>
        -
        <div class="oya5_3"><input type="tel" name="tel2" maxlength="4" size="2" placeholder=4567 required></div>
        -
        <div class="oya5_4"><input type="tel" name="tel3" maxlength="4" size="2" placeholder=8910 required></div>
    </div>

    <div class="oya">
        <div class="left">メールアドレス*</div>
        <div class="oya6_2"><input type="text" name="mail1" size="3" placeholder="abc123" required></div>
        @
        <div><input type="text" name="mail2" size="3" placeholder=".co.jp/.jp/等" required></div>
    </div>

    <div class="oya">
        <div class="left">どこで知ったか</div>
        <div class="oya7_2"><input name="where[]" type="checkbox" id="s3" value="雑誌"></div>
        <div>雑誌</div>
        <div class="oya7_3"><input name="where[]" type="checkbox" id="s4" value="新聞"></div>
        <div>新聞</div>
    </div>

    <div class="oya">
        <div class="left">質問カテゴリ</div>
        <div><select name="category">
        <option value="商品">商品について</option>
        <option value="その他" selected>その他</option></select></div>
    </div>

    <div class="oya">
        <div class="left">質問内容</div>
        <textarea name="question" cols="57" rows="10"></textarea>
        </div>

    <div class="button">
        <input name="reset" type="reset" value="リセット" /><br>
        <input type="submit" value="確認"><br>
    </div>
</div>
</table>
</form>
</body>
</html>
