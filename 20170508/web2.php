<?php
 $faname = $_POST["familyname"];
 $finame = $_POST["firstname"];
 $sex = $_POST["sex"];
 $address = $_POST["address"];
 $tell1 = $_POST["tell1"];
 $tell2 = $_POST["tell2"];
 $tell3 = $_POST["tell3"];
 $mail1 = $_POST["mail1"];
 $mail2 = $_POST["mail2"];
 $where = $_POST["where"];
 $category = $_POST["category"];
 $question = $_POST["question"];

 echo "名前は".$faname." ".$finame."です<br>";
 echo "性別は".$sex."です<br>";
 echo "住所は".$address."です<br>";
 echo "電話番号は".$tell1."-".$tell2."-".$tell3."です<br>";
 echo "メールアドレスは".$mail1."@".$mail2."です<br>";
 echo $where."で知りました<br>";
 echo "質問のカテゴリについては".$category."です<br>";
 echo "質問内容<br>".$question."<br>"."です<br>";
 ?>
