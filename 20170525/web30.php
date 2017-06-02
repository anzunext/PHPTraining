<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UTF-8">
<title>フォームからデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./style3.css">
</head>
<body>
<h1>お問い合わせ画面</h1>
<table>
<div class="main">
<form action = "web2.php" method = "post">
    <div class="oya">
        <div class="left">
            <p>姓*</p></div>
        <div class="right"><input id="faname" type="text" name="familyname" placeholder="山田" required></div>
    </div>

    <div class="oya">
        <div class="left">
            <p>名*</p></div>
        <div class="right"><input type="text" name="firstname" placeholder="太郎" required/><br/></div>
    </div>

    <div class="oya">
        <div class="left">
            <p>性別</p></div>
        <div class="right">
        <label class="oya3_2"><input name="sex" type="radio" value="男"/>男</label>
        <label class="oya3_3"><input name="sex" type="radio" value="女"/>女</label>
        <label class="oya3_4"><input name="sex" type="radio" value="不明"/>不明</label>
        </div>
    </div>

    <div class="oya">
        <div class="left">
            <p>住所</p></div>
        <div class="right">
        <input type="text" name="address" placeholder="ところ"><br/></div>
    </div>


    <div class="oya">
        <div class="left">
            <p>電話番号*</p></div>
        <div class="right">
        <div class="oya5_2"><input type="tel" name="tel1" maxlength="4" size="2" placeholder=123 required>-<input type="tel" name="tel2" maxlength="4" size="2" placeholder=4567 required>-<input type="tel" name="tel3" maxlength="4" size="2" placeholder=8910 required></div>
        </div>
    </div>

    <div class="oya">
        <div class="left">
            <p>メールアドレス*</p></div>
        <div class="right">
        <div class="oya6_2"><input type="text" name="mail1" size="6" placeholder="abc123" required>@<input type="text" name="mail2" size="6" placeholder=".co.jp/.jp/等" required></div>
        </div>
    </div>

    <div class="oya">
        <div class="left">
            <p>どこで知ったか</p></div>
        <div class="right">
        <div class="oya7_2"><input name="where[]" type="checkbox" id="s3" value="雑誌">雑誌<input name="where[]" type="checkbox" id="s4" value="新聞">新聞</div>
        </div>
    </div>

    <div class="oya">
        <div class="left">
            <p>質問カテゴリ</p></div>
        <div class="right">
        <div><select name="category">
        <option value="商品">商品について</option>
        <option value="その他" selected>その他</option></select></div>
        </div>
    </div>

    <div class="oya">
        <div class="left">
            <p>質問内容</p></div>
        <div class="right">
        <div><textarea name="question" cols="25" rows="3"></textarea></div>
        </div>
    </div>

    <div class="button">
        <div class="left">
        <input name="reset" type="reset" value="リセット"></div>
        <div class="right">
        <input type="submit" value="確認">
    </div>
    </div>
</div>
</div>
</table>
</form>
</body>
</html>
