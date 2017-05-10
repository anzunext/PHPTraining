<?php
//サンプルスクリプト1
$a = 10;
$b = 6;
echo $a + $b;
?>

<?php
//サンプルスクリプト2
$a = 20;
$a += 100;
echo $a;
?>

<?php
$x=$a=1;
$x=++$a;
echo $x;
?>

<?php
$x=$a=1;
$x=$a++;
echo $x;
?>

<?php
//サンプルスクリプト3
$a = 100;
$b = "100";
var_dump ( $a == $b );//値は同じなのでtrueを返す
//var_dump:変数に関する情報を出してくれる（echoでは出ない（文字列しか出せないから））
?>

<?php
//サンプルスクリプト4
$a = 100;
$b = "100";
var_dump ( $a === $b );//型が異なるのでfaulseを返す
?>

<?php
//サンプルスクリプト5
$a = 50;
$b = 50;
var_dump ( $a >= $b );//$aは$bより大きいまたは同じ、trueを繰り返す
?>

<?php
//サンプルスクリプト6
$a = 10;
echo ++ $a;
?>

<?php
//サンプルスクリプト7
$a = 10;
echo $a ++ , "<br>";
?>

<?php
echo "サンプルスクリプト8";
$a = 100;
$b = 50;
if ( $a == 100 and $b == 50 ){
    echo "hello world!<br>";
}
 ?>

<?php
echo "サンプルスクリプト9<br>";
$txt1 = "hello";
$txt2 = " world!";
echo $txt1 . $txt2 , "<br>";
//.をandにすると、文字列としては合っている＝1（＝trueと表示）
//やっていることは分からないから望ましい結果は返ってこない
 ?>

<?php
echo "サンプルスクリプト10<br>";
$txt1 = "hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1 , "<br>";
 ?>

<?php
echo "課題1<br>";
$a = 15;
$a %= 4;
echo $a , "<br>";
 ?>

<?php
echo "課題2<br>";
$a = 7;
$b = 10;
echo $a * $b , "<br>";
 ?>


<?php
echo "参考問題<br>";
echo "<table border = 1>";
for ( $i = 1; $i <= 10; $i++ ){
    echo "<tr>" ;
    for ( $j = 1; $j <=10; $j++ ){
        echo "<td>" . $j * $i . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
