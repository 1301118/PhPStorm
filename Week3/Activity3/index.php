<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>

<header>
    <h1> The Super Hero system</h1>
    <h2>Superhero Home page</h2>
</header>

<p>What would you like to do?</p>

<ul>
    <li><a href="insertSuperHero.php">Insert a superhero</a></li>
    <li><a href="showSuperHeros.php">Display all superheros</a></li>
    <li><a href="battle.php">Insert a battle</a></li>
    <li><a href="displayBattles.php">Display all battles</a></li>
<ul>

<?php

include("DBCONNECT.php");
$sql_query = "SELECT * FROM superheros";
$result = $db->query($sql_query);
while ($row = $result->fetch_array())
{
    $firstname = $row['firstName'];
    $lastName = $row['lastName'];
    $id = $row['superheroID'];
    echo "<li><a href='displayBattles.php?id={$id}'>Battles for {$firstname} {$lastName}</a></li>";
}

    ?>
</ul>

</ul>
</body>
</html>