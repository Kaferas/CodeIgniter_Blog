<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div class="row mt-1">
    <h3 class="mt-5 text-primary ">Recent post : </h3>
    <div class="row d-flex justify-content-between">
        <?php foreach ($posts as $item) : ?>
            <div class="col-sm-4 col-md-4">
                <div class="card m-3" style="width: 18rem;">
                    <img class="card-img-top " src="<?= '/' . $item->img_dir ?>" alt="">
                    <div class="card-body">
                        <h6 class="card-title">
                            <?= $item->title ?>
                        </h6>
                        <p class="card-text">
                            <?= word_limiter($item->description, 5, '...') ?>
                        </p>
                        <a href="<?= '/post/' . $item->slug ?>" class="btn btn-success">Read more</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>