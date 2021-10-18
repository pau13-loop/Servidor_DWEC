<?php 

$var = 3;

function changeValueVar(&$x) {
    $x = 8;
}

echo 'The value of global var is $var '.$var.'<br>';
changeValueVar($var);
echo 'Now the value changes...<br>';
echo "The value of global var is \$var ".$var;

?>