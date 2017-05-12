<?php
$fp = fopen ( "count.txt" , "r+" );//ファイルを開く
$count = fgets ( $fp , 10 );//9桁分値読み取り
$count ++;//値＋1（カウントアップ）
rewind ( $fp );//ファイルポインタを先頭に戻す
fputs ( $fp , $count );//値書き込み
fclose ( $fp );//ファイル閉じる
echo "あなたは".$count."人目のお客様です<br>";
?>

<?php
//フォーマット部分（ここでは％ｄ）が二つ目の引数と交換されて出力される
$score = 95;
printf ( "得点は%d点です" , $score );
echo "<br>"
 ?>

<?php
//見たらできた
$weekly = ["日","月","火","水","木","金","土"];
echo date( "Y/m/d g:i" );
print $weekly[date ("w")]."曜日";
?>

<?php
$fp = fopen ( "count.txt" , "r+" );
$count = fgets ( $fp , 10 );
$count ++;
rewind ( $fp );
fputs ( $fp , $count );
fclose ( $fp );
echo $count."<br>";

$weekly = ["日","月","火","水","木","金","土"];
echo date( "Y/m/d g:i" );
print $weekly[date ("w")]."曜日";

//ここまでは上記のもの
echo $count."<br>";
?>

<?php
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode (  " " , $pizza );
echo $pieces[0]; //piece1
echo $pieces[1];//piece2
 ?>

<?php
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list
( $user , $pass , $uid , $gid , $gecos , $home , $shell ) = explode
( ":" , $data );
echo $user;// foo
echo $home , "<br>";//*
 ?>

<?php
//わかんない
$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
var_dump ( explode ( ',' , $input1 ) );
var_dump ( explode ( ',' , $input2 ) );
var_dump ( explode ( ',' , $input3) );
 ?>

<?php
//わかんない
$str = 'one | two | three | four';
//正の値を持つlimit
print_r ( explode( '|' , $str , 2 ) );
//負の値を持つlimit(php 5.1以降)
print_r ( explode ( '|' , $str , -2 ) );
 ?>
