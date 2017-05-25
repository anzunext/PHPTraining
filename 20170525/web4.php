<?php
    $fp = fopen("web.csv", "a");
    fputcsv($fp,$_POST);
    fclose($fp);
?>
