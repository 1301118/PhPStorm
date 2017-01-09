<?php

$arr = array('one','two','three','four','stop','five');
while (list(, $val) = each ($arr)) {
    if($val == 'stop') {
        break 1;
    }
    echo "$val<br />\n";
}

?>