<?php

include_once '../database.php';

class News 
{
    private $id;
    private $title;
    private $description;
    private $image;
    private $date;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;
    private $createdBy;
    private $updatedBy;
    private $deletedBy;
    private $status;

    public function __construct($title = null, $description = null, $image = null, $date = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->date = $date;
    }

    public function save()
    {
        try {
            $db = new Database();
            $db->query("INSERT INTO news (title, description, image, date, createdBy, status) VALUES (:title, :description, :image, :date, :user, 1)");
            $db->bind(':title', $this->title);
            $db->bind(':description', $this->description);
            $db->bind(':image', $this->image);
            $db->bind(':date', $this->date);
            //$db->bind(':user', $_SESSION['user']->id);
            $db->bind(':user', 1);
            $db->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function all()
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM news WHERE status = 1");
            $news = $db->resultSet();
            return $news;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return [];
        }
    }

    public static function random()
    {
        try {
            $db = new Database();
            $db->query("SELECT * FROM news WHERE status = 1 ORDER BY RAND() LIMIT 3");
            $news = $db->resultSet();
            return $news;
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
            return [];
        }
    }

}