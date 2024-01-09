<?php

include_once 'database.php';

class Player
{
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $email;
    private $telefono;
    private $idUsuario;
    private $idCarnet;

    public function __construct($id, $nombre, $apellido, $fechaNacimiento, $email, $telefono, $idUsuario, $idCarnet)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->idUsuario = $idUsuario;
        $this->idCarnet = $idCarnet;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO jugadores (nombre, apellido, fechaNacimiento, email, telefono, idEquipo, idUsuario, idCarnet) VALUES (:nombre, :apellido, :fechaNacimiento, :email, :telefono, :idUsuario, :idCarnet)");
            $db->bind(':nombre', $this->nombre);
            $db->bind(':apellido', $this->apellido);
            $db->bind(':fechaNacimiento', $this->fechaNacimiento);
            $db->bind(':email', $this->email);
            $db->bind(':telefono', $this->telefono);
            $db->bind(':idUsuario', $this->idUsuario);
            $db->bind(':idCarnet', $this->idCarnet);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}
