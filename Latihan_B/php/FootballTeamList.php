<?php

class FootballTeamList
{
    private $team = "";
    private $country = "";
    private $year = 0;
    private $player = "";

    public function __construct($team = "", $country = "", $year = 0, $player = "")
    {
        $this->team = $team;
        $this->country = $country;
        $this->year = $year;
        $this->player = $player;
    }

    public function setTeam($team)
    {
        $this->team = $team;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setPlayer($player)
    {
        $this->player = $player;
    }

    public function getPlayer()
    {
        return $this->player;
    }
}

?>