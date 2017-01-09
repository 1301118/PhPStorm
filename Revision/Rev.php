<?php

function do_something(&$arg)
{
    $retval = $arg;
    $arg = $arg + 1;
    return $retval;
}
$a = 3;
echo $a;

?>