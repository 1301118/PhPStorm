<?php

$db = new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'b8de00c1673432',
    'da12052a',
    'cameronlawrie'
);

if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}

?>