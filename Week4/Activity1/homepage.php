<?php
/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 24/10/2016
 * Time: 14:08
 */

session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelinformation($accesslevel);

function displayAccessLevelInformation($accesslevel)
{
    if ($accesslevel == "standarduser") {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif ($accesslevel == "root") {
        echo "<p<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: red\">You now have access to additional admin features</p>";
    }
}

?>