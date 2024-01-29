<?php
include 'models/news.php';

for ($i = 1; $i <= 7; $i++) {
    // Create and save a new News object
    $news = new News(
        "Title $i",
        "Description $i",
        "Image$i.jpg",
        date('Y-m-d H:i:s')
    );
    $news->save();

    // Add the News object to the array
    $newsObjects[] = $news;
}
?>