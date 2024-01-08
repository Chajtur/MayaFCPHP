<?php

include_once 'database.php';

class Partido
{
    private $id;
    private $idTorneo;
    private $idEquipo1;
    private $idEquipo2;
    private $fecha;
    private $hora;
    private $golesEquipo1;
    private $golesEquipo2;
    private $estado;

    public function __construct($id, $idTorneo, $idEquipo1, $idEquipo2, $fecha, $hora, $golesEquipo1, $golesEquipo2, $estado)
    {
        $this->id = $id;
        $this->idTorneo = $idTorneo;
        $this->idEquipo1 = $idEquipo1;
        $this->idEquipo2 = $idEquipo2;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->golesEquipo1 = $golesEquipo1;
        $this->golesEquipo2 = $golesEquipo2;
        $this->estado = $estado;
    }

    public function create()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO partidos (idTorneo, idEquipo1, idEquipo2, fecha, hora, golesEquipo1, golesEquipo2, estado) VALUES (:idTorneo, :idEquipo1, :idEquipo2, :fecha, :hora, :golesEquipo1, :golesEquipo2, :estado)");
            $db->bind(':idTorneo', $this->idTorneo);
            $db->bind(':idEquipo1', $this->idEquipo1);
            $db->bind(':idEquipo2', $this->idEquipo2);
            $db->bind(':fecha', $this->fecha);
            $db->bind(':hora', $this->hora);
            $db->bind(':golesEquipo1', $this->golesEquipo1);
            $db->bind(':golesEquipo2', $this->golesEquipo2);
            $db->bind(':estado', $this->estado);
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
            $db->query("UPDATE partidos SET idTorneo = :idTorneo, idEquipo1 = :idEquipo1, idEquipo2 = :idEquipo2, fecha = :fecha, hora = :hora, golesEquipo1 = :golesEquipo1, golesEquipo2 = :golesEquipo2, estado = :estado WHERE id = :id");
            $db->bind(':id', $this->id);
            $db->bind(':idTorneo', $this->idTorneo);
            $db->bind(':idEquipo1', $this->idEquipo1);
            $db->bind(':idEquipo2', $this->idEquipo2);
            $db->bind(':fecha', $this->fecha);
            $db->bind(':hora', $this->hora);
            $db->bind(':golesEquipo1', $this->golesEquipo1);
            $db->bind(':golesEquipo2', $this->golesEquipo2);
            $db->bind(':estado', $this->estado);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}
