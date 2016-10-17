<?php
/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 10/10/2016
 * Time: 15:38
 */

include("DBCONNECT.php");

$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios'";

$result = $db-> query($sql_query);

while($row = $result->fetch_array())
{
    $movieID = $row['marvelMovieID'];
    $movieTitle = $row['title'];
    echo "<p>" .$movieTitle ."</p>";
}

$result->close();

$db->close();

?>