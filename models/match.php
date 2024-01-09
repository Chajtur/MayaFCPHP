<?php

include_once 'database.php';

class Game
{
    private $id;
    private $idTournament;
    private $idTeam1;
    private $idTeam2;
    private $date;
    private $time;
    private $goalsTeam1;
    private $goalsTeam2;
    private $status;

    public function __construct($idTournament = null, $idTeam1 = null, $idTeam2 = null, $date = null, $time = null, $goalsTeam1 = null, $goalsTeam2 = null, $status = null)
    {
        $this->idTournament = $idTournament;
        $this->idTeam1 = $idTeam1;
        $this->idTeam2 = $idTeam2;
        $this->date = $date;
        $this->time = $time;
        $this->goalsTeam1 = $goalsTeam1;
        $this->goalsTeam2 = $goalsTeam2;
        $this->status = $status;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO games (idTournament, idTeam1, idTeam2, date, time, goalsTeam1, goalsTeam2, status) VALUES (:idTournament, :idTeam1, :idTeam2, :date, :time, :goalsTeam1, :goalsTeam2, :status)");
            $db->bind(':idTournament', $this->idTournament);
            $db->bind(':idTeam1', $this->idTeam1);
            $db->bind(':idTeam2', $this->idTeam2);
            $db->bind(':date', $this->date);
            $db->bind(':time', $this->time);
            $db->bind(':goalsTeam1', $this->goalsTeam1);
            $db->bind(':goalsTeam2', $this->goalsTeam2);
            $db->bind(':status', $this->status);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public function update()
    {
        try {
            $db = new Database();
            $db->query("UPDATE games SET goalsTeam1 = :goalsTeam1, goalsTeam2 = :goalsTeam2, status = :status WHERE id = :id");
            $db->bind(':id', $this->id);
            $db->bind(':goalsTeam1', $this->goalsTeam1);
            $db->bind(':goalsTeam2', $this->goalsTeam2);
            $db->bind(':status', $this->status);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}
