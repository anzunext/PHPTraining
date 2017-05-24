<?php
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    $input_lines1 = trim ( fgets ( STDIN ) );
    //echo "$input_lines1";
    $il = $input_lines;
    $il1 = $input_lines1;
    
    for ( $i = 0; $i < $il1; $i++ ){
        echo $il[$i];
    }
?>
