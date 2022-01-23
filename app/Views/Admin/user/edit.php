<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Editer User</h1>
</div>
<div class="d-flex justify-content-center flex-column align-items-center">

    <?php if (isset($errors)) : ?>
        <div class="alert alert-warning">
            <?= $errors->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/users/update/' . $user->id) ?>" method="post" class="w-50 card p-4 border-dark">
        <div class="mb-3">
            <label for="name" class="form-label text-primary">FullName</label>
            <input type="text" name="fullName" value="<?= $user->fullName ?>" class="form-control border-dark">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-primary">Email address</label>
            <input type="email" name="email" value="<?= $user->email ?>" class="form-control border-dark">
        </div>
        <div class="mb-3 ">
            <label for="name" class="form-label text-primary">Role</label>
            <select class="form-select border-dark" name="role_id">
                <?php foreach ($roles as $role) : ?>
                    <option value="<?= $role->id ?>" <?= ($user->role_id == $role->id) ? 'selected' : '' ?>><?= $role->name ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="mb-3">
            <div class="form-check d-flex justify-content-between">
                <label class="form-check-label text-primary" for="active"> activer</label>
                <input class="form-check-input" type="checkbox" name="active" value="1" <?= ($user->active == 1) ? 'checked' : '' ?>>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Editer</button>
    </form>


</div>

<?= $this->endSection() ?>