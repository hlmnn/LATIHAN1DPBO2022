<?php

class FootballTeamList
{
    private $team = "";
    private $country = "";
    private $year = 0;
    private $player = "";

    // constructor
    public function __construct($team = "", $country = "", $year = 0, $player = "")
    {
        $this->team = $team;
        $this->country = $country;
        $this->year = $year;
        $this->player = $player;
    }

    // set and get team name
    public function setTeam($team)
    {
        $this->team = $team;
    }
    public function getTeam()
    {
        return $this->team;
    }

    // set and get country
    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function getCountry()
    {
        return $this->country;
    }

    // set and get year founded
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }

    // set and get player name
    public function setPlayer($player)
    {
        $this->player = $player;
    }
    public function getPlayer()
    {
        return $this->player;
    }

    // destructor
    public function __destruct(){
    }
}

?>