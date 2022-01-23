<?= $this->extend('template/admin') ?>


<?= $this->section('content') ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="<?= base_url('/posts/new') ?>" class="btn btn-primary">New post</a>
    <h1>All Articles</h1>
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
                <th scope="col">Title</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) :  ?>
                <tr class="text-center">
                    <td> <?= $post->id ?> </td>
                    <td><?= $post->title ?></td>
                    <td><?= $post->created_at ?></td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="<?= base_url('/posts/' . $post->id . '/edit') ?>" class="btn btn-primary">Edit</a>
                            <form action="<?= base_url('/posts/delete/' . $post->id) ?>" method="post" onsubmit="return confirm('are you sure')">
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