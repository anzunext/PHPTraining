<?php
//サンプルスクリプト1
$a = 0;
while ( $a <= 3 ){
    print ( $a );
    $a++;
    echo "<br>";
}
 ?>

<?php
echo "サンプルスクリプト2<br>";
$s = 0;
$i = 0;
do{
    ++ $i;
    $s += $i;
}while ( $i < 10 );
print "1から{$i}までの和は{$s}<br>";
 ?>


<?php
 //サンプルスクリプト4
$color=["red","green","blue"];
foreach($color as $value){
    print("{$value}<br/>");
}
?>

<?php
//サンプルスクリプト5
$color=["red","green","blue"];
foreach($color as $iro=>$value){
    print("{$iro}:{$value}<br/>");
}
?>

<?php
//サンプルスクリプト6
for($i=0; $i<10; $i++){
    if($i == 5){
        echo "5に着いた<br>";
        continue;
    }
    echo $i . "<br>";
}
echo "<hr>";
for($i=0; $i<10; $i++){
    if($i == 5){
        echo "最後になった<br>";
        break;
    }
    echo $i . "<br>";
}
?>


<?php
//課題1
    for ($i=1; $i<=5; $i++){
        echo("number:{$i}<br>");
    }
?>

<?php
 //課題2
$color=["赤","緑","青","黄色"];
for($i=0; $i<count($color); $i++){
    echo("$color[$i]<br>");
}
?>
