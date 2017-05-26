<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UTF-8">
<title>フォームからデータを受け取る</title>
<link rel="stylesheet" type="text/css"
 href="./web.css">
</head>
<body>
<div class="main">
<h1>お問い合わせ画面</h1>
<form action = "web2.php" method = "post">
    <div class="oya1">
        <div class="oya1_1">姓(必須)</div>
        <div class="oya1_2"><input id="faname" type = "text" name = "familyname"
             placeholder="family name" required/><br/></div>
    </div>

    <div class="oya2">
        <div class="oya2_1">名(必須)</div>
        <div class="oya2_2"><input type = "text" name = "firstname"
            placeholder ="first name" required/><br/></div>
    </div>

    <div class="oya3">
        <div class="oya3_1">性別</div>
        <label><input name = "sex" type = "radio" id="s1" value = "男"/>男</label>
        <label><input name = "sex" type = "radio" id="s2" value = "女"/>女</label>
        <label><input name = "sex" type = "radio" label="s3" value = "不明"/>不明</label></br>
    </div>

    <div class="oya4">
        <div class="oya4_1">住所</div>
            <div class="oya4_2"><input type = "text" name = "address"
                 placeholder="address"><br/></div>
    </div>

    <div class="oya5">
        <div class="oya5_1">電話番号(必須)</div>
        <div><input type = "tel" name = "tel1" maxlength="4" required></div>
        -
        <div><input type = "tel" name = "tel2" maxlength="4" required></div>
        -
        <div><input type = "tel" name = "tel3" maxlength="4" required></div>
    </div>

    <div class="oya6">
        <div class="oya6_1">メールアドレス(必須)</div>
        <div class="oya6_2"><input type = "text" name = "mail1"
             placeholder="e-mail address" required></div>
        @
        <div><input type = "text" name = "mail2" required></div>
    </div>

    <div class="oya7">
        <div class="oya7_1">どこで知ったか</div>
        <div class="oya7_2"><input name = "where[]" type = "checkbox"
             id="s3" value="雑誌"></div>
        <div>雑誌</div>
        <div class="oya7_3"><input name = "where[]" type = "checkbox"
             id="s4" value="新聞"></div>
        <div>新聞</div>
    </div>

    <div class="oya8">
        <div class="oya8_1">お問い合わせカテゴリ</div>
        <div><select name="category">
        <option value="商品">商品について</option>
        <option value="その他" selected>その他</option></select></div>
    </div>

    <div>
        <div>質問内容</div>
        <div><input name = "question" type = "text"><br></div>
    </div>

    <div class="button">
        <input name="reset" type="reset" value="リセット" /><br>
        <input type = "submit" value = "確認"><br>
    </div>
</html>
</div>
</body>
</form>
