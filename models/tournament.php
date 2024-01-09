<?php

include_once 'database.php';

class Torneo
{
    private $id;
    private $name;
    private $startDate;
    private $endDate;
    private $inscriptionStartDate;
    private $inscriptionEndDate;
    private $cost;
    private $teams;
    private $playersPerTeam;
    private $matchdays;

    public function __construct($name = null, $startDate = null, $endDate = null, $inscriptionStartDate = null, $inscriptionEndDate = null, $cost = null, $teams = null, $playersPerTeam = null, $matchdays = null)
    {
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->inscriptionStartDate = $inscriptionStartDate;
        $this->inscriptionEndDate = $inscriptionEndDate;
        $this->cost = $cost;
        $this->teams = $teams;
        $this->playersPerTeam = $playersPerTeam;
        $this->matchdays = $matchdays;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO tournaments (name, startDate, endDate, inscriptionStartDate, inscriptionEndDate, cost, teams, playersPerTeam, matchdays) VALUES (:name, :startDate, :endDate, :inscriptionStartDate, :inscriptionEndDate, :cost, :teams, :playersPerTeam, :matchdays)");
            $db->bind(':name', $this->name);
            $db->bind(':startDate', $this->startDate);
            $db->bind(':endDate', $this->endDate);  
            $db->bind(':inscriptionStartDate', $this->inscriptionStartDate);
            $db->bind(':inscriptionEndDate', $this->inscriptionEndDate);
            $db->bind(':cost', $this->cost);
            $db->bind(':teams', $this->teams);
            $db->bind(':playersPerTeam', $this->playersPerTeam);
            $db->bind(':matchdays', $this->matchdays);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function getAll()
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM tournaments");
            $db->execute();
            return $db->resultSet();
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function get($id)
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM tournaments WHERE id = :id");
            $db->bind(':id', $id);
            $db->execute();
            return $db->single();
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public function getTable($idTorneo)
   {
         try {
            $db = new Database();
            $db->query("SELECT t.id, t.name as equipo, t.logo, t.colorPrimario, t.colorSecundario, t.short, p.points, p.playedMatches, p.wonMatches, p.drawMatches, p.lostMatches, p.goalsFor, p.goalsAgainst, p.goalsDifference FROM tournaments t INNER JOIN positions p ON t.id = p.tournamentId INNER JOIN teams e ON p.teamId = e.id WHERE t.id = :idTorneo ORDER BY p.points DESC, p.goalsDifference DESC, p.goalsFor DESC, p.goalsAgainst ASC");
         }
   }
}