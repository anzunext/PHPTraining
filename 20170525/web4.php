<?php
header("Location: web3.php");
$data[] = $_POST['count'];
$data[] = $_POST['faname'];
$data[] = $_POST['finame'];
$data[] = $_POST['sex'];
$data[] = $_POST['address'];
$data[] = $_POST['tel1'];
$data[] = $_POST['tel2'];
$data[] = $_POST['tel3'];
$data[] = $_POST['mail1'];
$data[] = $_POST['mail2'];
$data[] = $_POST["where"];
$data[] = $_POST['category'];
$data[] = $_POST['question'];

    $fp = fopen("web.csv", "a");
    fputcsv($fp,$data);
    fclose($fp);



?>
