<?php
/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 10/10/2016
 * Time: 15:20
 */

include("DBCONNECT.php");

$sql_query = "SELECT * FROM marvelmovies";

$result = mysqli_query($db, $sql);

$row = mysql_fetch_array($result, MYSQLI_ASSOC);

?>

