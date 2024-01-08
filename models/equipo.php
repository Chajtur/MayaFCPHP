<?php

include_once 'database.php';

class Equipo
{
    private $id;
    private $nombre;
    private $escudo;
    private $colorPrimario;
    private $colorSecundario;

    public function __construct($id, $nombre, $escudo, $colorPrimario, $colorSecundario)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->escudo = $escudo;
        $this->colorPrimario = $colorPrimario;
        $this->colorSecundario = $colorSecundario;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO equipos (nombre, escudo, colorPrimario, colorSecundario) VALUES (:nombre, :escudo, :colorPrimario, :colorSecundario)");
            $db->bind(':nombre', $this->nombre);
            $db->bind(':escudo', $this->escudo);
            $db->bind(':colorPrimario', $this->colorPrimario);
            $db->bind(':colorSecundario', $this->colorSecundario);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}