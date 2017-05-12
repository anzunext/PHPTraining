<?php
echo "サンプルスクリプト2<br>";
$score=90;
if($score >=80){
    echo"合格です！おめでとうございます！<br>";
}
?>

<?php
echo "課題2<br>";
$score = 80;
if ( $score >= 70 ){
    echo "合格";
//            「ではない」
}
else {
//  「($score <= 70)」
    echo "残念<br>";
//       「合格」
}
?>

<?php
echo "サンプルスクリプト4<br>";
$score = 60;
if ( $score >= 80 ){
    echo "合格です。おめでとう。";
}
elseif ( $score >= 60 ){
    echo "不合格です。よくない。<br>";
}
//elseも書いてみた
//else ( $score < 60 ){
//    echo "だめです。";
//}
 ?>

<?php
$level1 = "A";
echo "サンプルスクリプト<br>";
switch ( $level1 ){
    case "A":
    print ( "すばらしい" );
    break;

    case "B":
    print ( "いいね" ) ;
    break;

    case "C":
    print ( "悪くないけれど" );
    break;

    default:
    print ( "がんばって" );
    break;
}
echo "<br>";
 ?>

<?php
echo "サンプルスクリプト3<br>";
$score = 90;
if ( $score >= 80 ){
    echo "合格です！おめでと";
}else{
    echo "不合格";
}
echo "<br>";
?>

 <?php
echo "課題1<br>";
$l = "あなたの好きな色は";
$level1 = "赤";
switch ( $level1 ){
    case "赤":
    print ( "{$l}赤" );
    break;

    case "青":
    print ( "あなたの好きな色は青" );
    //       {$l}で表現できる
    break;

    case "黄":
    print ( "あなたの好きな色は黄" );
    //　　　　{$l}で表現できる
    break;

    default:
    print ( "{$l}別の色だ" );
    break;
}
echo "<br>";
  ?>
