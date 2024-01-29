<div class="text-white mt-5 flex justify-center w-full flex-col">
    <?php
    include_once '../controllers/news.php';
    $new = new NewsController;
    $news = $new->index();
    foreach ($news as $new) {
        include '../components/news/new.php';
    }
    ?>
</div>