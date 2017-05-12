<?php
$a="hello world";
echo $a;
?>
<?php
function local() {
    $var_local = "Hello ";
    global $var_global;
    echo $var_local . $var_global . "\n";
}
$var_global = "World";

local();
echo $var_local ;
 ?>
