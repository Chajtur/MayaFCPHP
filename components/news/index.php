<div class="flex flex-col">
<?php
foreach ($news as $new) { ?>
    <div class="flex-row mb-4">
        <div class="card shadow-sm">
            <div class="card-header text-xl">
                <h3 class="my-0 font-weight-normal"><?= $new->title ?></h3>
            </div>
            <img class="card-img-top" src='<?= $new->image ?>' alt="Card image cap">
            <div class="card-body">
                <p class="card-text"><?= $new->description ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"><?= $new->date ?></small>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>