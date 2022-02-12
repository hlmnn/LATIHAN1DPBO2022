<?php

include "FootballTeamList.php";

$teamlist1 = new FootballTeamList();
$teamlist1->setTeam("Arsenal");
$teamlist1->setCountry("United Kingdom");
$teamlist1->setYear(1886);
$teamlist1->setPlayer("Nicolas Pepe");

echo "Team Name : ". $teamlist1->getTeam()."<br>";
echo "Country : ". $teamlist1->getCountry()."<br>";
echo "Year Founded : ". $teamlist1->getYear()."<br>";
echo "Player Name : ". $teamlist1->getPlayer()."<br>";

?>