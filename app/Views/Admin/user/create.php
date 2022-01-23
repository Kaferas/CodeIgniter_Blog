<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="text-primary"><i class="h3">👨‍⚕️</i>&nbsp;Add user</h1>
</div>

<div class="container d-flex justify-content-center flex-column align-items-center">
    <?php if (isset($errors)) : ?>
        <div class="alert alert-warning">
            <?= $errors->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/users') ?>" method="post" class="w-50 card p-4 border-dark">
        <div class="mb-3">
            <label for="name" class="form-label text-primary">Name</label>
            <input type="text" name="fullName" class="form-control border-dark">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-primary">Email</label>
            <input type="email" name="email" class="form-control border-dark">
        </div>
        <div class="mb-3 ">
            <label for="name" class="form-label text-primary">Role</label>
            <select class="form-select form-control col-md-5 border-dark" name="role_id">
                <option selected>select a role</option>
                <?php foreach ($roles as $role) : ?>
                    <option value="<?= $role->id ?>"><?= $role->name ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <label class="form-check-label text-primary h4" for="active"> activer</label>
                <input class="form-check-input form-control border-dark" type="checkbox" name="active">
            </div>
        </div>
        <button type="submit" class="btn btn-primary container">Enregistrer</button>
    </form>

</div>


<?= $this->endSection() ?>