<?php
echo "サンプルスクリプト3<br>";
//サンプルスクリプト1は意味ないので省略
//サンプルスクリプト2は3とは同じところに書き込めないので省略
function familyname ( $fname , $year ){
    echo "$fname yamada. が生まれた年は $year<br>";
}

familyname ( "yuuki" , "1975" );
familyname ( "hirobumi" , "1978" );
familyname ( "yukiko" , "1983" );
?>

<?php
echo "サンプルスクリプト4<br>";
function setheight ( $minheight = 50 ){
    echo "高さは : $minheight<br>";
}

setheight ( 350 );
setheight ();
setheight ( 135 );
setheight ( 80 );
 ?>

<?php
echo "サンプルスクリプト5<br>";
function sum ( $x , $y ){
    $z = $x + $y;
    return $z;
}

echo "5 + 10 =".sum ( 5 , 10 )."<br>";
//$s = sum ( 5, 10 );
//eho $s;
//これでも同じこと
echo "7 + 13 =".sum ( 7 , 13 )."<br>";
echo "2 + 4 =".sum ( 2 , 4 )."<br>";
 ?>

<?php
echo "課題1<br>";
function txt ( $t ){
    echo "{$t}<br>";
}
txt ( "2017年度の新入社員研修がスタートしました。がんばりましょう。" );
?>

<?php
echo "課題1答え<br>";
//PHP関数を定義する
function writemessage(){
    echo "2017年度の～<br>";
}
//PHP関数を呼び出す
writemessage();
 ?>

<?php
echo "課題2<br>";
function addfive ( $num ){
    $num += 5;
/*ここにechoで出力すると答えの値が15になる
今回は｛｝の外でecho出力しているので
コピー「数字」としての値は
消えてしまっている。ことになる*/
}
function addsix ( &$num ){
    $num += 6;
/*ここでもechoで出力していないが、
＆があるので、$numの6という「数字」ではない
ここの$numの値は「数字」ではなくて、
&num自体の値が入るため答えで16という値が出る*/
}
$orignum = 10;

addfive ( $orignum );
echo "元の位置は $orignum<br>";

addsix ( $orignum );
echo "元の位置は $orignum<br>";
 ?>
