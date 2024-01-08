<?php

include_once 'database.php';

class Contact
{
    private $name;
    private $email;
    private $message;
    private $phone;

    public function __construct($name, $email, $message, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO contacts (name, email, message, phone) VALUES (:name, :email, :message, :phone)");
            $db->bind(':name', $this->name);
            $db->bind(':email', $this->email);
            $db->bind(':message', $this->message);
            $db->bind(':phone', $this->phone);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}
