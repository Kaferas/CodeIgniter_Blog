<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="text text-success">📟 New Article</h1>
</div>

<?php if (isset($errors)) : ?>
    <div class="alert alert-warning">
        <?= $errors->listErrors() ?>
    </div>
<?php endif; ?>

<?php if (session()->get('error')) : ?>
    <div class="alert alert-warning">
        <?= session()->get('error') ?>
    </div>
<?php endif; ?>
<div class="container col-md-9">

    <form action="<?= base_url('/posts') ?>" method="post" class="card p-4 border-dark " enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label text-primary">Title</label>
            <input type="text" name="title" class="form-control border-dark">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-primary">Image</label>
            <input type="file" name="img" class="form-control border-dark" required>
        </div>
        <div class="mb-3 ">
            <label for="name" class="form-label text-primary">Role</label>
            <select class="form-select  border-dark" name="tags[]" multiple>

                <?php foreach ($tags as $tag) : ?>
                    <option class="text-center" value="<?= $tag->id ?>"><?= $tag->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3 ">
            <label class="form-label text-primary" for="description">Description</label>
            <textarea class="form-control border-dark" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>



<?= $this->endSection() ?>