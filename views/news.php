<div class="text-yellow-400 mt-5 flex justify-center">
    <div>
        <?php 
            include_once '../controllers/news.php';    
            $new = new NewsController;
            $news = $new->index();
            foreach ($news as $new) {
                include '../components/news/new.php';
            }
        ?>
    </div>
</div>