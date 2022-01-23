<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>
<div class="row justify-content-md-center mt-5">
    <div class="col-5 mt-4 mb-4">
        <h2 class="text-center text-light p-2 h5 bg-success">Sign In on Our Platform</h2>
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <form action="/login" method="post" class="mt-4 mb-4 card p-4 border-dark">
            <div class="form-group mb-3 p-3">
                <label for="" class="text-primary h4">Email:</label>
                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control border-dark" placeholder="chrisirak95@gmail.com">
            </div>

            <div class="form-group mb-3 p-3">
                <label for="" class="text-primary h4">Password:</label>
                <input type="password" name="password" placeholder="Password" class="form-control border-dark">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-info">Connexion</button>
            </div>
        </form>
    </div>

</div>
<?= $this->endSection() ?>