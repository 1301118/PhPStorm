<?php
/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 24/10/2016
 * Time: 14:15
 */

$username = $_POST["username"];
$password = $_POST["password"];

if ($username =="cammy" && $password=="goml")
{
    setcookie('access_level_cookie','standarduser');
}

header('location: homepage.php');

?>
