<div class="w-4/5 flex justify-center mx-auto">
    <div class="mb-4 text-center">
        <div class="card shadow-sm w-full">
            <div class="card-header text-xl">
                <h3 class="my-0 font-weight-normal"><?= $new->title ?></h3>
            </div>
            <img class="card-img-top" src=<?= $new->image ?> alt="Card image cap">
            <div class="card-body">
                <p class="card-text"><?= $new->description ?></p>
            </div>
        </div>
    </div>
</div>