<?php

include_once 'database.php';

class Equipo
{
    private $id;
    private $name;
    private $short;
    private $primaryColor;
    private $secondaryColor;
    private $logo;

    public function __construct($name = null, $short = null, $primaryColor = null, $secondaryColor = null, $logo = null)
    {
        $this->name = $name;
        $this->short = $short;
        $this->primaryColor = $primaryColor;
        $this->secondaryColor = $secondaryColor;
        $this->logo = $logo;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO teams (name, short, primaryColor, secondaryColor, logo) VALUES (:name, :short, :primaryColor, :secondaryColor, :logo)");
            $db->bind(':name', $this->name);
            $db->bind(':short', $this->short);
            $db->bind(':primaryColor', $this->primaryColor);
            $db->bind(':secondaryColor', $this->secondaryColor);
            $db->bind(':logo', $this->logo);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}