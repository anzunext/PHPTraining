<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang = "ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
    <title>CSVファイルを読み込む1</title>
</head>
<body>
<h1>管理者画面</h1>
<table border="1">
    <caption>受信データ</caption>
    <tr>
    <th>No.</th>
    <th colspan="2">氏名</th>
    <th>性別</th>
    <th>住所</th>
    <th colspan="3">電話番号</th>
    <th colspan="2">メールアドレス</th>
    <th>どこで知ったか</th>
    <th>質問カテゴリ</th>
    <th>質問内容</th>
    </tr>
    <?php
    $fp=fopen("web.csv", "r");
    while($date=fgetcsv($fp, 10000)){


        foreach ($date as $d) {
            print"<td>$d</td>";
        }
        print "</tr>\n";
    }
    ?>
</table>
</body>
</html>
