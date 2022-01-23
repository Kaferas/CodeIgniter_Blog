<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Editer Role</h1>
</div>

<?php if (isset($errors)) : ?>
    <div class="alert alert-warning">
        <?= $errors->listErrors() ?>
    </div>
<?php endif; ?>
<div class="container col-md-8">
    <form action="<?= base_url('/roles/update/' . $role->id) ?>" method="post" class="card p-3 border-dark">
        <div class="mb-3">
            <label for="name" class="form-label text-primary">Name</label>
            <input type="text" name="name" value="<?= $role->name ?>" class="form-control border-dark">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?= $this->endSection() ?>