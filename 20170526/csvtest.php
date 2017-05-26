<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang = "ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
    <title>CSVファイルを読み込む1</title>
</head>
<body>
<table border="1">
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
