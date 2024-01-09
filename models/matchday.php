<?php

include_once 'database.php';

class MatchDay
{
    private $id;
    private $idTorneo;
    private $numJornada;
    private $fechaInicio;
    private $fechaFin;

    public function __construct($id, $idTorneo, $numJornada, $fechaInicio, $fechaFin)
    {
        $this->id = $id;
        $this->idTorneo = $idTorneo;
        $this->numJornada = $numJornada;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO jornadas (idTorneo, numJornada, fechaInicio, fechaFin) VALUES (:idTorneo, :numJornada, :fechaInicio, :fechaFin)");
            $db->bind(':idTorneo', $this->idTorneo);
            $db->bind(':numJornada', $this->numJornada);
            $db->bind(':fechaInicio', $this->fechaInicio);
            $db->bind(':fechaFin', $this->fechaFin);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}