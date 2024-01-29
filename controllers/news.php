<?php

include_once '../models/news.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

if ($action == 'indexComponent') {
    $new = new NewsController;
    $new->indexComponent();
} else if ($action == 'create') {
    $new = new NewsController;
    $new->create();
} else if ($action == 'store') {
    $new = new NewsController;
    $new->store();
} else if ($action == 'index') {
    $new = new NewsController;
    $new->index();
}

class NewsController
{
    public function indexComponent()
    {
        $news = News::random();
        require_once '../components/news/index.php';
    }

    public function create()
    {
        require_once '../views/news/create.php';
    }

    public function store()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $date = $_POST['date'];

        $news = new News($title, $description, $image, $date);
        $news->save();

        header('Location: ?controller=news&action=index');
    }

    public function index()
    {
        $news = News::all();
        return $news;
    }
}