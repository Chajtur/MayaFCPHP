<?php

include_once '../database.php';

class Player
{
    private $id;
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $email;
    private $phone;
    private $idCarnet;

    public function __construct($firstName = null, $lastName = null, $dateOfBirth = null, $email = null, $phone = null, $idCarnet = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;
        $this->phone = $phone;
        $this->idCarnet = $idCarnet;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO players (firstName, lastName, dateOfBirth, email, phone, idCarnet) VALUES (:firstName, :lastName, :dateOfBirth, :email, :phone, :idCarnet)");
            $db->bind(':firstName', $this->firstName);
            $db->bind(':lastName', $this->lastName);
            $db->bind(':dateOfBirth', $this->dateOfBirth);
            $db->bind(':email', $this->email);
            $db->bind(':phone', $this->phone);
            $db->bind(':idCarnet', $this->idCarnet);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}
