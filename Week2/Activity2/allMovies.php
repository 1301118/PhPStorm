<?php
/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 10/10/2016
 * Time: 15:20
 */

include("DBCONNECT.php");

$sql_query = "SELECT * FROM marvelmovies";

$result = $db-> query($sql_query);

while($row = $result->fetch_array())
{
    $movieTitle = $row['title'];
    echo "<p>" .$movieTitle ."</p>";
}

$result->close();

$db->close();

?>

