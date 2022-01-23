<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="<?= base_url('/users/new') ?>" class="btn btn-primary"><i class="h3">👨‍⚕️</i>&nbsp;New User</a>
    <h1>All Users</h1>
</div>

<?php if (session()->get('success')) : ?>
    <div class="alert alert-success">
        <?= session()->get('success')  ?>
    </div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-dark p-2 table-sm">
        <thead>
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Fullname</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) :  ?>
                <tr class="text-center">
                    <td> <?= $user->id ?> </td>
                    <td><?= $user->fullName ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                        <?= $user->active == 1 ? '<span class="badge bg-success">active</span>' : '<span class="badge bg-danger">inactive</span>' ?>
                    </td>
                    <td><?= $user->role ?></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('/users/' . $user->id . '/edit') ?>" class="btn btn-info">Editer</a>
                            <form action="<?= base_url('/users/delete/' . $user->id) ?>" method="post" onsubmit="return confirm('Is it real What You Need ?')">
                                <button type="submit" class="btn btn-danger container">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>