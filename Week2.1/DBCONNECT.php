<?php
/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 10/10/2016
 * Time: 15:23
 */

$db = new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'b8de00c1673432',
    'da12052a',
    'cameronlawrie'
);

if ($db->connect_error){
    die('connectionfailed ['.$db->connect_error.' ]');
}

?>