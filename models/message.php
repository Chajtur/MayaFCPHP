<?php

include_once 'database.php';

class Message
{
    private $name;
    private $email;
    private $message;
    private $phone;

    public function __construct($name = null, $email = null, $message = null, $phone = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
    }

    
    /**
     * Función para guardar un mensaje en la base de datos
     * 
     * @return boolean
     */
    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO messages (name, email, message, phone, date) VALUES (:name, :email, :message, :phone, now())");
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

    /**
     * Función para obtener todos los mensajes de la base de datos
     * 
     * @return array
     */
    public static function all()
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM messages");
            $db->execute();
            return $db->resultSet();
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    /**
     * Función para obtener un mensaje de la base de datos
     * 
     * @param int $id
     * @return array
     */
    public static function find($id)
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM messages WHERE id = :id");
            $db->bind(':id', $id);
            $db->execute();
            return $db->single();
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    /**
     * Función para eliminar un mensaje de la base de datos
     * 
     * @param int $id
     * @return boolean
     */
    public static function delete($id)
    {
        try {
            $db = new Database();
            $db->query("DELETE FROM messages WHERE id = :id");
            $db->bind(':id', $id);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }
}
