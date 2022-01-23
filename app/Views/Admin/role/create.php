<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1><i class="h3">♿&nbsp;</i>New Role</h1>
</div>

<?php if (isset($errors)) : ?>
    <div class="alert alert-warning">
        <?= $errors->listErrors() ?>
    </div>
<?php endif; ?>
<div class="d-flex justify-content-center">
    <form action="<?= base_url('/roles') ?>" method="post" class="w-50 card border-dark p-4">
        <div class="mb-3">
            <label for="name" class="form-label text-primary">Role Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?= $this->endSection() ?>