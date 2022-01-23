<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="<?= base_url('/tags/new') ?>" class="btn btn-primary">🔗 New Tag</a>
    <h1>All roles</h1>
</div>

<?php if (session()->get('success')) : ?>
    <div class="alert alert-success">
        <?= session()->get('success')  ?>
    </div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-dark table-sm">
        <thead>
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tags as $item) :  ?>
                <tr class="text-center">
                    <td> <?= $item->id ?> </td>
                    <td><?= $item->name ?></td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="<?= base_url('/tags/' . $item->id . '/edit') ?>" class="btn btn-primary">Edit</a>
                            <form action="<?= base_url('/tags/delete/' . $item->id) ?>" method="post" onsubmit="return confirm('Delete this Tag >>??')">
                                <button type="submit" class="btn btn-danger">
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