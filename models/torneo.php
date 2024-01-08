<?php

include_once 'database.php';

class Torneo
{
    private $id;
    private $nombre;
    private $fechaInicio;
    private $fechaFin;
    private $fechaInicioInscripcion;
    private $fechaFinInscripcion;
    private $costo;
    private $numEquipos;
    private $numJugadoresEquipo;
    private $numJornadas;

    public function __construct($id, $nombre, $fechaInicio, $fechaFin, $fechaInicioInscripcion, $fechaFinInscripcion, $costo, $numEquipos, $numJugadoresEquipo, $numJornadas)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->fechaInicioInscripcion = $fechaInicioInscripcion;
        $this->fechaFinInscripcion = $fechaFinInscripcion;
        $this->costo = $costo;
        $this->numEquipos = $numEquipos;
        $this->numJugadoresEquipo = $numJugadoresEquipo;
        $this->numJornadas = $numJornadas;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO torneos (nombre, fechaInicio, fechaFin, fechaInicioInscripcion, fechaFinInscripcion, costo, numEquipos, numJugadoresEquipo, numJornadas) VALUES (:nombre, :fechaInicio, :fechaFin, :fechaInicioInscripcion, :fechaFinInscripcion, :costo, :numJugadores, :numEquipos, :numJugadoresEquipo, :numJornadas)");
            $db->bind(':nombre', $this->nombre);
            $db->bind(':fechaInicio', $this->fechaInicio);
            $db->bind(':fechaFin', $this->fechaFin);
            $db->bind(':fechaInicioInscripcion', $this->fechaInicioInscripcion);
            $db->bind(':fechaFinInscripcion', $this->fechaFinInscripcion);
            $db->bind(':costo', $this->costo);
            $db->bind(':numEquipos', $this->numEquipos);
            $db->bind(':numJugadoresEquipo', $this->numJugadoresEquipo);
            $db->bind(':numJornadas', $this->numJornadas);
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
            $db->query("SELECT id, nombre FROM torneos");
            $db->execute();
            return $db->resultSet();
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function get()
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM torneos WHERE id = :id");
            $db->bind(':id', $this->id);
            $db->execute();
            return $db->single();
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public function getTabla($idTorneo)
   {
         try {
              $db = new Database();
              $db->query("SELECT e.nombre, e.escudo, e.colorPrimario, e.colorSecundario, p.golesFavor, p.golesContra, p.diferenciaGoles, p.puntos, p.partidosJugados, p.partidosGanados, p.partidosEmpatados, p.partidosPerdidos 
              FROM equipos e 
              INNER JOIN posiciones p 
              ON e.id = p.idEquipo 
              WHERE p.idTorneo = :idTorneo 
              ORDER BY p.puntos DESC, p.diferenciaGoles DESC, p.golesFavor DESC");
              $db->bind(':idTorneo', $idTorneo);
              $db->execute();
              return $db->resultSet();
         } catch (PDOException $e) {
              echo 'Connection Error: ' . $e->getMessage();
              return false;
         }
   }
}